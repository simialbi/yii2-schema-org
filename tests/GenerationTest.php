<?php

namespace yiiunit\extensions\schemaorg;

use Yii;

/**
 * @group schemaorg
 */
class GenerationTest extends TestCase
{
    public function testGeneration()
    {
        $this->mockApplication();

        Yii::$app->runAction('schema/models/generate', [
            'namespace' => 'tests\schemas',
            'folder' => '@runtime/generated',
            'removeOld' => true
        ]);

        $this->assertFileExists(Yii::getAlias('@runtime/cache/schemas-latest.json'));
        $this->assertDirectoryExists(Yii::getAlias('@runtime/generated'));

        $classes = glob(Yii::getAlias('@runtime/generated/*.php'));

        $this->assertEquals(854, count($classes));

        foreach ($classes as $class) {
            require $class;

            $fqn = 'tests\\schemas\\' . basename($class, '.php');
            $this->assertTrue(class_exists($fqn));
        }
    }

    public function testFilter()
    {
        $this->mockApplication();

        Yii::$app->runAction('schema/models/generate', [
            'namespace' => 'tests\schemas',
            'folder' => '@runtime/generated',
            'removeOld' => true,
            'schemas' => 'Offer,DataDownload'
        ]);

        $classes = glob(Yii::getAlias('@runtime/generated/*.php'));

        $this->assertEquals(2, count($classes));
        $this->assertFileExists(Yii::getAlias('@runtime/generated/Offer.php'));
        $this->assertFileExists(Yii::getAlias('@runtime/generated/DataDownload.php'));
    }
}