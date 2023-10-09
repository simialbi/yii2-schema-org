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
        /** @var \simialbi\yii2\schemaorg\models\Model $parent */
        $parent = Yii::createObject([
            'class' => '\tests\schemas\Person',
            'name' => 'George Bush',
            'disambiguatingDescription' => '41st President of the United States',
            'children' => [$child]
        ]);

        JsonLDHelper::add($parent);

        $content = Yii::$app->view->render('@webroot/views/empty');

        $expected = <<<JSONLD
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Person","children":[{"@type":"Person","disambiguatingDescription":"43rd President of the United States","name":"George W. Bush"}],"disambiguatingDescription":"41st President of the United States","name":"George Bush"}</script>
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
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","item":{"@id":"http://www.example.com/index.php?r=","name":"Home"},"position":1},{"@type":"ListItem","item":{"@id":"http://www.example.com/index.php?r=welcome","name":"Welcome"},"position":2}]}</script>
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

        /** @var \simialbi\yii2\schemaorg\models\Model $person */
        $person = new \simialbi\yii2\schemaorg\models\Person([
            'name' => 'George W. Bush',
            'disambiguatingDescription' => '43rd President of the United States'
        ]);
        /** @var \simialbi\yii2\schemaorg\models\Model $person2 */
        $person2 = new \simialbi\yii2\schemaorg\models\Person([
            'name' => 'George Bush',
            'disambiguatingDescription' => '41st President of the United States'
        ]);

        JsonLDHelper::add($person);
        JsonLDHelper::add($person2);

        ob_start();
        JsonLDHelper::render(true);
        $content = ob_get_clean();

        $this->assertStringContainsString('"name":"George W. Bush"', trim($content));
        $this->assertStringContainsString('"name":"George Bush"', trim($content));
        $this->assertStringContainsString('"disambiguatingDescription":"43rd President of the United States"', trim($content));
        $this->assertStringContainsString('"disambiguatingDescription":"41st President of the United States"', trim($content));
        $this->assertStringContainsString('"@type":"Person"', trim($content));

        FileHelper::unlink(Yii::getAlias('@simialbi/yii2/schemaorg/models/Person.php'));

        $this->assertFileDoesNotExist(Yii::getAlias('@simialbi/yii2/schemaorg/models/Person.php'));
    }
}
