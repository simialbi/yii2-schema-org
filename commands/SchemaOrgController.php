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
    public $namespace;

    /**
     * @var string The target folder for generated classes and traits
     */
    public $folder;

    /**
     * @var array All the schemas that needs to be generated (including dependencies)
     */
    private $requiredSchemas = [];

    /**
     * @var array All classes definitions
     */
    private $classes = [];

    /**
     * @var array All properties definitions
     */
    private $properties = [];

    /**
     * Generates the user-requested schemas along with all required traits
     *
     * @param string $version The Schema.org version to use when generating files
     * @return int The exit code
     */
    public function actionIndex($version = 'latest')
    {
        if (empty($this->schemas)) {
            Console::error('You must specify one or more Schemas using --schemas');
            return ExitCode::CONFIG;
        }

        if (empty($this->namespace)) {
            Console::error('You must specify a namespace for the generated files using --namespace');
            return ExitCode::CONFIG;
        }

        if (empty($this->folder)) {
            Console::error('You must specify a folder for the generated files using --folder');
            return ExitCode::CONFIG;
        }

        if (!is_dir($this->folder)) {
            mkdir($this->folder, 0777, true);
        }

        $file = Yii::getAlias("@runtime/schemas-$version.json");
        if (!file_exists($file)) {
            $url = sprintf(self::DEFINITION_FILE, $version);
            copy($url, $file);
        }

        $json = json_decode(file_get_contents($file));

        $stacked = [];
        foreach ($json->{'@graph'} as $graph) {
            $stacked = ArrayHelper::merge($stacked, $graph->{'@graph'});
        }


        $byName = ArrayHelper::index($stacked, function ($entry) {
            return $this->stripNs($entry->{'@id'});
        });

        if (!empty($this->schemas)) {
            foreach ($this->schemas as $schema) {
                $this->gatherRequiredSchemas($byName, $schema);
            }
        }

        foreach ($this->requiredSchemas as $schema) {
            $this->addClass($schema, $byName[$schema]);
        }

        foreach ($stacked as $data) {
            if ($data->{'@type'} === 'rdf:Property') {
                $classes = $this->wrapArray($data->{'http://schema.org/domainIncludes'});
                foreach ($classes as $class) {
                    $this->registerProperty($this->stripNs($class->{'@id'}), $data);
                }
            }
        }

        foreach ($this->classes as $class) {
            file_put_contents(
                $this->folder . '/' . $class['name'] . 'Trait.php',
                $this->renderPartial('trait', [
                    'namespace' => $this->namespace,
                    'class' => $class,
                    'traits' => $class['parents'],
                    'properties' => $this->properties[$class['name']] === null ? [] : $this->properties[$class['name']],
                ])
            );
        }


        foreach ($this->schemas as $schema) {
            $class = $this->classes[$schema];
            file_put_contents(
                $this->folder . '/' . $class['name'] . '.php',
                $this->renderPartial('class', [
                    'namespace' => $this->namespace,
                    'class' => $class,
                ])
            );
        }

        return ExitCode::OK;
    }

    private function getAllTraits($className, &$chain = [])
    {
        if (is_array($this->classes[$className]['parents'])) {
            foreach ($this->classes[$className]['parents'] as $parent) {
                if ($parent !== '') {
                    if (!in_array($parent, $chain, true)) {
                        $chain[] = $parent;
                    }
                    $this->getAllTraits($parent, $chain);
                }
            }
        }

        return $chain;
    }

    private function registerProperty($class, $attributeInfo)
    {
        if (!in_array($class, $this->requiredSchemas, true)) {
            return;
        }

        if (!isset($this->properties[$class])) {
            $this->properties[$class] = [];
        }
        $this->properties[$class][$attributeInfo->{'rdfs:label'}] = [
            'name' => $attributeInfo->{'rdfs:label'},
            'description' => strip_tags($attributeInfo->{'rdfs:comment'}),
            'see' => $attributeInfo->{'@id'},
        ];
    }

    private function wrapArray($variable)
    {
        return is_array($variable) ? $variable : [$variable];
    }

    private function gatherRequiredSchemas($array, $name)
    {
        if (!$name || in_array($name, $this->requiredSchemas, true)) {
            return;
        }

        $this->requiredSchemas[] = $name;

        foreach ($this->wrapArray($array[$name]->{'rdfs:subClassOf'}) as $parent) {
            $this->gatherRequiredSchemas($array, $this->stripNs($parent->{'@id'}));
        }
    }

    private function addClass($className, $data)
    {
        $parents = [];
        foreach ($this->wrapArray($data->{'rdfs:subClassOf'}) as $parent) if ($parent) {
            $parents[] = $this->stripNs($parent->{'@id'});
        }

        $this->classes[$className] = [
            'name' => $className,
            'description' => $data->{'rdfs:comment'},
            'parents' => $parents,
            'properties' => [],
            '_data' => $data,
        ];
    }

    /**
     * Strips the namespace from a name
     *
     * @param $string
     * @return mixed
     */
    private function stripNs($string)
    {
        return str_replace('http://schema.org/', '', $string);
    }

    /**
     * @inheritdoc
     */
    public function options($actionID)
    {
        return ArrayHelper::merge(parent::options($actionID), [
            'schemas',
            'namespace',
            'folder',
        ]);
    }

}