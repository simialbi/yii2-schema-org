<?php

namespace simialbi\yii2\schemaorg\tests;

use simialbi\yii2\schemaorg\commands\SchemaOrgController;
use simialbi\yii2\schemaorg\Module;
use Yii;
use yii\console\ExitCode;

/**
 * Class GenerationTest
 *
 * @property $generator SchemaOrgController
 * @package simialbi\yii2\schemaorg\tests
 */
class GenerationTest extends TestCase
{

    private function initGenerator()
    {
        $module = new Module('schemas');
        $generator = new SchemaOrgController('schema-org', $module);

        $generator->schemas = ['ALL'];
        $generator->namespace = 'tests\schemas';
        $generator->folder = 'tests/runtime/generated';
        $generator->removeOld = true;
        $generator->verbose = false;

        return $generator;
    }

    public function testGeneration3_4()
    {
        $generator = $this->initGenerator();
        $generator->actionIndex(3.4);

        $this->assertFileExists(Yii::getAlias('@runtime/schemas-3.4.json'), 'Schema 3.4 file downloaded');

        $this->assertTrue(is_dir($generator->folder));
        $this->assertTrue(is_dir($generator->folder . '/traits'));

        $classes = glob($generator->folder . '/*.php');

        $this->assertEquals(776, count($classes));

        foreach ($classes as $class) {
            require $class;

            $fqn = $generator->namespace . '\\' . str_replace('.php', '', basename($class));
            $this->assertTrue(class_exists($fqn));
        }

        $traits = glob($generator->folder . '/traits/*.php');

        $this->assertEquals(778, count($traits));

        foreach ($traits as $trait) {
            $fqn = $generator->namespace . '\\traits\\' . str_replace('.php', '', basename($trait));
            $this->assertTrue(trait_exists($fqn));
        }

        foreach (glob(__DIR__ . '/data/*.php') as $entry) {
            echo $entry . " !!!!\n";
            $this->assertFileEquals($entry, $generator->folder . '/' . basename($entry));
        }

        foreach (glob(__DIR__ . '/data/traits/*.php') as $entry) {
            echo $entry . " !!!!\n";
            $this->assertFileEquals($entry, $generator->folder . '/traits/' . basename($entry));
        }
    }

    public function testGenerationLatest()
    {
        $generator = $this->initGenerator();
        $generator->actionIndex();

        $this->assertFileExists(Yii::getAlias('@runtime/schemas-latest.json'));
    }

    public function testItFailsIfWrongVersion()
    {
        $generator = $this->initGenerator();
        $response = $generator->actionIndex('wut');

        $this->assertEquals(ExitCode::CONFIG, $response);
    }

}