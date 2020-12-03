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
 * @author Simon Karlen <simi.albi@outlook.com>
 * @author Mehdi Achour <machour@gmail.com>
 *
 * @property \simialbi\yii2\schemaorg\Module $module
 */
class ModelsController extends Controller
{
    /**
     * The schemas definition file url pattern
     */
    const DEFINITION_FILE = 'https://schema.org/version/%s/schemaorg-current-http.jsonld';

    /**
     * {@inheritdoc}
     */
    public $defaultAction = 'generate';

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
    public $folder = '@simialbi/yii2/schemaorg/models';

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
    public function actionGenerate($version = 'latest')
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

        if ($this->schemas) {
            $this->stdout('Generating schema.org models "');
            $this->stdout(implode(',', $this->schemas), Console::FG_YELLOW, Console::BOLD);
            $this->stdout('" from version: ');
        } else {
            $this->stdout('Generating ');
            $this->stdout('all', Console::FG_YELLOW, Console::BOLD);
            $this->stdout(' schema.org models from version: ');
        }
        $this->stdout($version, Console::FG_GREEN, Console::ITALIC);
        $this->stdout("\n");

        $this->namespace = Yii::getAlias($this->namespace);
        $this->folder = Yii::getAlias($this->folder);

        $this->stdout("Creating directories \n");
        FileHelper::createDirectory($this->folder, 0777, true);
        FileHelper::createDirectory(Yii::getAlias('@runtime/cache'), 0777);

        if ($this->removeOld) {
            $files = FileHelper::findFiles($this->folder, ['except' => ['Model.php']]);
            $this->stdout('Clearing old files: found ' . count($files), Console::FG_YELLOW);
            $this->stdout("\n");
            foreach ($files as $file) {
                FileHelper::unlink($file);
            }
        }

        $file = Yii::getAlias("@runtime/cache/schemas-$version.json");
        if (!file_exists($file) || $version === 'latest') {
            $url = sprintf(self::DEFINITION_FILE, $version);
            copy($url, $file);
        }

        $json = Json::decode(file_get_contents($file));
        /* Old version
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
        /*/ // @since 3.5
        $graphs = ArrayHelper::remove($json, '@graph', []);

        $data = [];
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
        //*/

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
            $classUsages = ArrayHelper::remove($property, 'schema:domainIncludes', []);
            $rangeIncludes = ArrayHelper::remove($property, 'schema:rangeIncludes');
            $comment = ArrayHelper::remove($property, 'rdfs:comment', '');
            if (is_array($comment) && isset($comment['@value'])) {
                $comment = $comment['@value'];
            }
            $see = str_replace('schema:', 'https://schema.org/', ArrayHelper::remove($property, '@id'));
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
                            'description' => preg_replace('#<br ?/?>#i', '', $comment),
                            'see' => $see
                        ]
                    ]
                ));
            }
        }

        $this->traverseClasses($classes);

        if (!empty($this->schemas)) {
            foreach ($classes as $key => $class) {
                unset($classes[$key]);
                $key = str_replace('schema:', '', $key);
                $classes[$key] = $class;
            }
            $classes = ArrayHelper::filter($classes, $this->schemas);
        }

        $this->stdout("\n");
        foreach ($classes as $class) {
            $label = ArrayHelper::remove($class, 'rdfs:label', '');
            if (is_array($label) && isset($label['@value'])) {
                $label = $label['@value'];
            }
            if (empty($label) || false !== in_array($label, $this->blackList)) {
                continue;
            }
            // e.g. https://schema.org/3DModel generates as className "3DModel" what's not allowed in PHP
            $className = (preg_match('#^[0-9]#', $label)) ? 'Model' . $label : $label;

            $this->stdout('*** creating class ');
            $this->stdout($this->namespace . '\\' . $className, Console::FG_YELLOW, Console::BOLD);
            $this->stdout("\n");

            $comment = ArrayHelper::getValue($class, 'rdfs:comment', '');
            if (is_array($comment) && isset($comment['@value'])) {
                $comment = $comment['@value'];
            }
            $contents = $this->renderPartial('class', [
                'namespace' => $this->namespace,
                'description' => preg_replace(
                    '#<br ?/?>#i',
                    '',
                    $comment
                ),
                'className' => $className,
                'label' => $label,
                'properties' => ArrayHelper::index(ArrayHelper::getValue($class, 'properties', []), 'name')
            ]);
            if (false !== file_put_contents($this->folder . '/' . $className . '.php', $contents)) {
                $this->stdout("*** class {$this->namespace}\\$className created", Console::FG_GREEN);
                $this->stdout("\n\n");
            } else {
                $this->stderr("*** failed to create {$this->namespace}\\$className", Console::FG_RED);
                $this->stderr("\n\n");
            }
        }

        return ExitCode::OK;
    }

    /**
     * {@inheritdoc}
     */
    public function options($actionID)
    {
        $options = parent::options($actionID);

        if ($actionID === 'generate') {
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
        $type = str_replace('schema:', '', $type);

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
                return 'bool';
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
