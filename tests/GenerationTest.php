<?php

namespace simialbi\yii2\schemaorg\tests;

use simialbi\yii2\schemaorg\commands\SchemaOrgController;
use simialbi\yii2\schemaorg\Module;
use Yii;

/**
 * Class GenerationTest
 *
 * @property $generator SchemaOrgController
 * @package simialbi\yii2\schemaorg\tests
 */
class GenerationTest extends TestCase
{
    private $generator;

    public function testGeneration()
    {
        $module = new Module('schemas');

        $this->generator = new SchemaOrgController('schema-org', $module);

        $this->generator->schemas = ['ALL'];
        $this->generator->namespace = 'tests\schemas';
        $this->generator->folder = 'tests/runtime/generated';
        $this->generator->removeOld = true;
        $this->generator->verbose = false;

        $this->generator->actionIndex(3.4);

        $this->assertFileExists(Yii::getAlias('@runtime/schemas-3.4.json'));
        $this->assertTrue(is_dir($this->generator->folder));
        $this->assertTrue(is_dir($this->generator->folder . '/traits'));

        $classes = glob($this->generator->folder . '/*.php');

        $this->assertEquals(776, count($classes));

        foreach ($classes as $class) {
            require $class;

            $fqn = $this->generator->namespace . '\\' . str_replace('.php', '', basename($class));
            $this->assertTrue(class_exists($fqn));
        }

        $traits = glob($this->generator->folder . '/traits/*.php');

        $this->assertEquals(778, count($traits));

        foreach ($traits as $trait) {
            $fqn = $this->generator->namespace . '\\traits\\' . str_replace('.php', '', basename($trait));
            $this->assertTrue(trait_exists($fqn));
        }

    }

}