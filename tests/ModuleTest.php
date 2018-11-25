<?php

namespace simialbi\yii2\schemaorg\tests;

use Yii;
use simialbi\yii2\schemaorg\Module;

class ModuleTest extends TestCase
{
    public function testDefaultVersion()
    {
        $this->mockApplication();

        Yii::$app->extensions['simialbi/yii2-schema-org'] = [
            'name' => 'simialbi/yii2-schema-org',
            'version' => '2.0.0',
        ];

        $module = new Module('schemas');
        // FIXME: bump this when v2 is released
        $this->assertEquals('1.0', $module->getVersion());
    }
}