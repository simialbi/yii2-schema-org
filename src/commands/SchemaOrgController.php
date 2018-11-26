<?php
/**
 * @link https://github.com/simialbi/yii2-schema-org
 * @copyright Copyright (c) 2017 Simon Karlen
 * @license MIT
 */

namespace simialbi\yii2\schemaorg\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;
use yii\helpers\ArrayHelper;
use yii\helpers\Console;
use yii\helpers\FileHelper;
use yii\helpers\Json;

/**
 * Class SchemaOrgController
 *
 * @package simialbi\yii2\schemaorg\commands
 * @author Simon Karlen <simi.albi@gmail.com>
 * @author Mehdi Achour <machour@gmail.com>
 *
 * @property \simialbi\yii2\schemaorg\Module $module
 */
class SchemaOrgController extends Controller
{
    /**
     * The schemas definition file url pattern
     */
    const DEFINITION_FILE = 'http://schema.org/version/%s/all-layers.jsonld';

    /**
     * @var array The schemas requested by the user
     */
    public $schemas = [];

    /**
     * @var string The namespace for generated classes and traits
     */
    public $namespace = 'simialbi\yii2\schemaorg\models';

    /**
     * @var string The target folder for generated classes and traits
     */
    public $folder = '@simialbi/yii2/schemaorg/src/models';

    /**
     * @var boolean Wether to remove old files before re-generating
     */
    public $removeOld = false;

    /**
     * @var array Classes not to generate
     */
    public $blackList = ['Class', 'Boolean', 'Date', 'DateTime', 'Float', 'Number', 'Text', 'Time'];

    /**
     * Generates the user-requested schemas along with all required traits
     *
     * @param string $version The Schema.org version to use when generating files
     * @return int The exit code
     * @throws \yii\base\Exception
     */
    public function actionIndex($version = 'latest')
    {
        if (empty($this->namespace)) {
            $this->stderr('You must specify a namespace for the generated files using --namespace', Console::FG_RED);
            $this->stderr("\n");
            return ExitCode::CONFIG;
        }

        if (empty($this->folder)) {
            $this->stderr('You must specify a folder for the generated files using --folder', Console::FG_RED);
            $this->stderr("\n");
            return ExitCode::CONFIG;
        }

        $this->namespace = Yii::getAlias($this->namespace);
        $this->folder = Yii::getAlias($this->folder);

        FileHelper::createDirectory($this->folder, 0777, true);
        FileHelper::createDirectory(Yii::getAlias('@runtime/cache'), 0777);

        if ($this->removeOld) {
            $files = FileHelper::findFiles($this->folder, ['except' => ['Model.php']]);
            foreach ($files as $file) {
                FileHelper::unlink($file);
            }
        }

        $file = Yii::getAlias("@runtime/cache/schemas-$version.json");
        if (!file_exists($file)) {
            $url = sprintf(self::DEFINITION_FILE, $version);
            copy($url, $file);
        }

        $json = Json::decode(file_get_contents($file));
        $schemas = ArrayHelper::remove($json, '@graph', []);

        $data = [];
        foreach ($schemas as $schema) {
//            $id = ArrayHelper::remove($schema, '@id');
            $graphs = ArrayHelper::remove($schema, '@graph');
            foreach ($graphs as $k => $graph) {
                if (!isset($graph['@type'])) {
                    unset($graphs[$k]);
                    continue;
                }
                if (is_array($graph['@type'])) {
                    $graphs[$k]['@type'] = implode(',', $graph['@type']);
                }
            }
            $data = ArrayHelper::merge($data, ArrayHelper::index($graphs, null, ['@type']));
        }

        $properties = ArrayHelper::remove($data, 'rdf:Property');
        $classes = ArrayHelper::index(ArrayHelper::remove($data, 'rdfs:Class'), '@id');

        foreach ($properties as $property) {
            $label = ArrayHelper::remove($property, 'rdfs:label', '');
            if (is_array($label) && isset($label['@value'])) {
                $label = $label['@value'];
            }
            if (empty($label)) {
                continue;
            }
            $classUsages = ArrayHelper::remove($property, 'http://schema.org/domainIncludes', []);
            $rangeIncludes = ArrayHelper::remove($property, 'http://schema.org/rangeIncludes');
            $comment = ArrayHelper::remove($property, 'rdfs:comment', '');
            $see = ArrayHelper::remove($property, '@id');
            if ($rangeIncludes === null) {
                continue;
            }
            if (ArrayHelper::isAssociative($rangeIncludes)) {
                $rangeIncludes = [$rangeIncludes];
            }
            foreach ($classUsages as $className) {
                if (is_array($className)) {
                    $className = ArrayHelper::remove($className, '@id', $className);
                }
                ArrayHelper::setValue($classes, [$className, 'properties'], array_merge(
                    ArrayHelper::getValue($classes, [$className, 'properties'], []),
                    [
                        [
                            'name' => $label,
                            'types' => array_flip(array_flip(array_map(
                                [$this, 'mapType'],
                                ArrayHelper::getColumn(
                                    $rangeIncludes,
                                    '@id'
                                )
                            ))),
                            'description' => $comment,
                            'see' => $see
                        ]
                    ]
                ));
            }
        }

        if (!empty($this->schemas)) {
            foreach ($classes as $key => $class) {
                unset($classes[$key]);
                $key = str_replace('http://schema.org/', '', $key);
                $classes[$key] = $class;
            }
            $classes = ArrayHelper::filter($classes, $this->schemas);
        }

        $this->traverseClasses($classes);

        foreach ($classes as $class) {
            $label = ArrayHelper::remove($class, 'rdfs:label', '');
            if (is_array($label) && isset($label['@value'])) {
                $label = $label['@value'];
            }
            if (empty($label) || false !== in_array($label, $this->blackList)) {
                continue;
            }

            $contents = $this->renderPartial('class', [
                'namespace' => $this->namespace,
                'description' => ArrayHelper::getValue($class, 'rdfs:comment', ''),
                'label' => $label,
                'properties' => ArrayHelper::index(ArrayHelper::getValue($class, 'properties', []), 'name')
            ]);
            file_put_contents($this->folder . '/' . $label . '.php', $contents);
        }

        return ExitCode::OK;
    }

    /**
     * {@inheritdoc}
     */
    public function options($actionID)
    {
        $options = parent::options($actionID);

        if ($actionID === 'index') {
            $options[] = 'schemas';
            $options[] = 'namespace';
            $options[] = 'folder';
            $options[] = 'removeOld';
            $options[] = 'blackList';
        }

        return $options;
    }

    /**
     * Get data type
     * @param string $type
     * @return string
     */
    private function mapType($type)
    {
        $type = str_replace('http://schema.org/', '', $type);

        switch ($type) {
            case 'URL':
            case 'Text':
            case 'Date':
            case 'DateTime':
            case 'Time':
                return 'string';
            case 'Number':
                return 'float';
            case 'Integer':
                return 'int';
            case 'Boolean':
            case 'True':
            case 'False':
                return 'boolean';
        }

        return $type;
    }

    /**
     * Traverse all classes and inherit properties from parents
     *
     * @param array $classes
     * @param array $allClasses
     */
    private function traverseClasses(array &$classes, $allClasses = null)
    {
        if ($allClasses === null) {
            $allClasses = $classes;
        }

        foreach ($classes as &$class) {
            $parentClasses = ArrayHelper::remove($class, 'rdfs:subClassOf', []);
            if (ArrayHelper::isAssociative($parentClasses)) {
                $parentClasses = [$parentClasses];
            }

            foreach ($parentClasses as $k => $parentClass) {
                $parentClasses[$k] = ArrayHelper::getValue($allClasses, $parentClass['@id']);
                if ($parentClass === null) {
                    continue;
                }
            }

            $this->traverseClasses($parentClasses, $allClasses);

            foreach ($parentClasses as $parentClass) {
                ArrayHelper::setValue($class, 'properties', ArrayHelper::merge(
                    ArrayHelper::getValue($class, 'properties', []),
                    ArrayHelper::getValue($parentClass, 'properties', [])
                ));
            }
        }
    }
}
