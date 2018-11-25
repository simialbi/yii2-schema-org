<?php

namespace simialbi\yii2\schemaorg\tests;

use simialbi\yii2\schemaorg\commands\SchemaOrgController;
use simialbi\yii2\schemaorg\Module;
use Yii;

class GenerationTest extends TestCase
{
    public function testDefaultVersion()
    {
        $module = new Module('schemas');

        $generator = new SchemaOrgController('schema-org', $module);

        $generator->schemas = ['ALL'];
        $generator->namespace = '\\tests';
        $generator->folder = 'tests/runtime/generated';
        $generator->removeOld = true;
        $generator->verbose = false;

        $generator->actionIndex(3.4);

        $this->assertFileExists(Yii::getAlias('@runtime/schemas-3.4.json'));
        $this->assertTrue(is_dir($generator->folder));
        $this->assertTrue(is_dir($generator->folder . '/traits'));
    }
}