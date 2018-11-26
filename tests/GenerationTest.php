<?php

namespace yiiunit\extensions\schemaorg;

use simialbi\yii2\schemaorg\commands\ModelsController;
use simialbi\yii2\schemaorg\Module;
use Yii;

/**
 * @group schemaorg
 */
class GenerationTest extends TestCase
{
    /**
     * @var ModelsController
     */
    private $_generator;

    protected function setUp()
    {
        parent::setUp();

        $module = new Module('schema');

        $this->_generator = new ModelsController('schema-org', $module);

        $this->_generator->namespace = 'tests\schemas';
        $this->_generator->folder = '@runtime/generated';
        $this->_generator->removeOld = true;
    }

    public function testGeneration()
    {
        $this->_generator->actionGenerate();

        $this->assertFileExists(Yii::getAlias('@runtime/cache/schemas-latest.json'));
        $this->assertDirectoryExists(Yii::getAlias($this->_generator->folder));

        $classes = glob($this->_generator->folder . '/*.php');

        $this->assertEquals(771, count($classes));

        foreach ($classes as $class) {
            require $class;

            $fqn = $this->_generator->namespace . '\\' . basename($class, '.php');
            $this->assertTrue(class_exists($fqn));
        }
    }

    public function testFilter()
    {
        $this->_generator->schemas = ['Offer', 'DataDownload'];

        $this->_generator->actionGenerate();

        $classes = glob($this->_generator->folder . '/*.php');

        $this->assertEquals(2, count($classes));
        $this->assertFileExists(Yii::getAlias($this->_generator->folder . '/Offer.php'));
        $this->assertFileExists(Yii::getAlias($this->_generator->folder . '/DataDownload.php'));
    }
}