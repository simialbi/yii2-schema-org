<?php

namespace yiiunit\extensions\schemaorg;

use simialbi\yii2\schemaorg\commands\SchemaOrgController;
use simialbi\yii2\schemaorg\Module;
use Yii;

/**
 * @group schemaorg
 */
class GenerationTest extends TestCase
{
    /**
     * @var SchemaOrgController
     */
    private $_generator;

    protected function setUp()
    {
        parent::setUp();

        $module = new Module('schemas');

        $this->_generator = new SchemaOrgController('schema-org', $module);

        $this->_generator->namespace = 'tests\schemas';
        $this->_generator->folder = '@runtime/generated';
        $this->_generator->removeOld = true;
    }

    public function testGeneration()
    {
        $this->_generator->actionIndex();

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

        $this->_generator->actionIndex(3.4);

        $classes = glob($this->_generator->folder . '/*.php');

        $this->assertEquals(2, count($classes));
        $this->assertFileExists(Yii::getAlias($this->_generator->folder . '/Offer.php'));
        $this->assertFileExists(Yii::getAlias($this->_generator->folder . '/DataDownload.php'));
    }
}