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

        $this->assertStringContainsString($expected, $content);
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
<script type="application/ld+json">{"@context":"http://schema.org","itemListElement":[{"position":1,"item":{"@id":"http://www.example.com/index.php?r=","name":"Home"},"@type":"ListItem"},{"position":2,"item":{"@id":"http://www.example.com/index.php?r=welcome","name":"Welcome"},"@type":"ListItem"}],"@type":"BreadcrumbList"}</script>
JSONLD;

        $this->assertStringContainsString($expected, $content);

        FileHelper::unlink(Yii::getAlias('@simialbi/yii2/schemaorg/models/BreadcrumbList.php'));
        FileHelper::unlink(Yii::getAlias('@simialbi/yii2/schemaorg/models/ListItem.php'));

        $this->assertFileDoesNotExist(Yii::getAlias('@simialbi/yii2/schemaorg/models/BreadcrumbList.php'));
        $this->assertFileDoesNotExist(Yii::getAlias('@simialbi/yii2/schemaorg/models/ListItem.php'));
    }

    public function testMerged()
    {
        $this->mockApplication();

        Yii::$app->runAction('schema/models/generate', [
            'removeOld' => true,
            'schemas' => 'Person'
        ]);
        $this->assertFileExists(Yii::getAlias('@simialbi/yii2/schemaorg/models/Person.php'));

        $this->destroyApplication();
        $this->mockApplication([
            'modules' => [
                'schema' => [
                    'class' => 'simialbi\yii2\schemaorg\Module',
                    'mergeModels' => true
                ]
            ]
        ]);

        $_SERVER['HTTP_HOST'] = 'www.example.com';
        $_SERVER['REQUEST_URI'] = 'http://www.example.com/index.php?r=welcome';

        $person = new \simialbi\yii2\schemaorg\models\Person([
            'name' => 'George W. Bush',
            'disambiguatingDescription' => '43rd President of the United States'
        ]);
        $person2 = new \simialbi\yii2\schemaorg\models\Person([
            'name' => 'George Bush',
            'disambiguatingDescription' => '41st President of the United States'
        ]);

        JsonLDHelper::add($person);
        JsonLDHelper::add($person2);

        ob_start();
        JsonLDHelper::render(true);
        $content = ob_get_clean();

        $expected = <<<HTML
<script type="application/ld+json">[{"@context":"http://schema.org","name":"George W. Bush","disambiguatingDescription":"43rd President of the United States","@type":"Person"},{"@context":"http://schema.org","name":"George Bush","disambiguatingDescription":"41st President of the United States","@type":"Person"}]</script>
HTML;

        $this->assertStringContainsString(trim($content), trim($expected));

        FileHelper::unlink(Yii::getAlias('@simialbi/yii2/schemaorg/models/Person.php'));

        $this->assertFileDoesNotExist(Yii::getAlias('@simialbi/yii2/schemaorg/models/Person.php'));
    }
}
