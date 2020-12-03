<?php

namespace yiiunit\extensions\schemaorg;

use simialbi\yii2\schemaorg\helpers\JsonLDHelper;
use Yii;
use yii\helpers\FileHelper;

class HelperTest extends TestCase
{
    public function testAutoRender()
    {
        $this->mockApplication();

        Yii::$app->runAction('schema/models/generate', [
            'namespace' => 'tests\schemas',
            'folder' => '@runtime/generated',
            'removeOld' => true,
            'schemas' => 'Person'
        ]);
        $this->assertFileExists(Yii::getAlias('@runtime/generated/Person.php'));

        $this->destroyApplication();
        $this->mockWebApplication([
            'modules' => [
                'schema' => [
                    'autoRender' => true
                ]
            ]
        ]);

        require_once Yii::getAlias('@runtime/generated/Person.php');
        $child = Yii::createObject([
            'class' => '\tests\schemas\Person',
            'name' => 'George W. Bush',
            'disambiguatingDescription' => '43rd President of the United States'
        ]);
        $parent = Yii::createObject([
            'class' => '\tests\schemas\Person',
            'name' => 'George Bush',
            'disambiguatingDescription' => '41st President of the United States',
            'children' => [$child]
        ]);

        JsonLDHelper::add($parent);

        $content = Yii::$app->view->render('@webroot/views/empty');

        $expected = <<<JSONLD
<script type="application/ld+json">{"@context":"http://schema.org","children":[{"name":"George W. Bush","disambiguatingDescription":"43rd President of the United States","@type":"Person"}],"name":"George Bush","disambiguatingDescription":"41st President of the United States","@type":"Person"}</script>
JSONLD;

        $this->assertContains($expected, $content);
    }

    public function testAutoCreate()
    {
        $this->mockApplication();

        Yii::$app->runAction('schema/models/generate', [
            'removeOld' => true,
            'schemas' => 'BreadcrumbList,ListItem'
        ]);
        $this->assertFileExists(Yii::getAlias('@simialbi/yii2/schemaorg/models/BreadcrumbList.php'));
        $this->assertFileExists(Yii::getAlias('@simialbi/yii2/schemaorg/models/ListItem.php'));

        $this->destroyApplication();
        $this->mockWebApplication([
            'modules' => [
                'schema' => [
                    'autoRender' => true,
                    'autoCreate' => true
                ]
            ]
        ]);

        $_SERVER['HTTP_HOST'] = 'www.example.com';
        $_SERVER['REQUEST_URI'] = 'http://www.example.com/index.php?r=welcome';

        Yii::$app->view->params['breadcrumbs'] = [
            ['url' => ['/'], 'label' => 'Home'],
            'Welcome'
        ];

        $content = Yii::$app->view->render('@webroot/views/empty');

        $expected = <<<JSONLD
<script type="application/ld+json">{"@context":"http://schema.org","itemListElement":[{"item":{"@id":"http://www.example.com/index.php?r=","name":"Home"},"position":1,"@type":"ListItem"},{"item":{"@id":"http://www.example.com/index.php?r=welcome","name":"Welcome"},"position":2,"@type":"ListItem"}],"@type":"BreadcrumbList"}</script>
JSONLD;

        $this->assertContains($expected, $content);

        FileHelper::unlink(Yii::getAlias('@simialbi/yii2/schemaorg/models/BreadcrumbList.php'));
        FileHelper::unlink(Yii::getAlias('@simialbi/yii2/schemaorg/models/ListItem.php'));

        $this->assertFileNotExists(Yii::getAlias('@simialbi/yii2/schemaorg/models/BreadcrumbList.php'));
        $this->assertFileNotExists(Yii::getAlias('@simialbi/yii2/schemaorg/models/ListItem.php'));
    }
}