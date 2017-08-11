# yii2-schema-org
Schema.org yii2 representation and helpers for json-ld generation

## Resources
 * JSON-LD [documentation](http://json-ld.org/learn.html)
 * Google [Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool)
 
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require --prefer-dist simialbi/yii2-schema-org
```

or add 

```
"simialbi/yii2-schema-org": "*"
```

to the ```require``` section of your `composer.json`


## Usage

### Setup Module

Configure the module named `schema` in the modules section of your Yii configuration file.
Do this for console and for web application configuration file.

```php
'modules' => [
	'schema' => [
		'class' => 'simialbi\yii2\schemaorg\Module',
		//'source' => 'http://schema.org/docs/full.html',
		//'autoCreate' => false,
		//'autoRender' => false
	]
]
```

Also add the module `schema` to the bootstrap section of your configuration files:
```php
'bootstrap' => ['log', 'schema']
```

### Configuration

#### source

The `source` parameter defines the root url of [schema.org](http://schema.org) property documentation.
It is used to automatically create the models in console application.

#### autoCreate

Automatically create breadcrumbs `json+ld` data.

#### autoRender

Automatically render `json+ld` data at the end of body section.

If you don't use this parameter, be sure to call `JsonLDHelper::render()` in your layout file.
Example:
```php
<?php
/* @var $this \yii\web\View */
/* @var $content string */
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use simialbi\yii2\schemaorg\helpers\JsonLDHelper;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php JsonLDHelper::render(); ?>
    <?php $this->head() ?>
</head>
```  

### Model generation

```
$ php yii schema/schema-org
```

## Example Usage
To e.g. add a person to json+ld, you can do the following:

```php
use simialbi\yii2\schemaorg\models\Person;
use simialbi\yii2\schemaorg\helpers\JsonLDHelper;

$child = new Person();
$child->name = 'George W. Bush';
$child->disambiguatingDescription = '43rd President of the United States';
$person = new Person();
$person->name = 'George Bush';
$person->disambiguatingDescription = '41st President of the United States';
$person->children = [$child];

JsonLDHelper::add($person);
``` 



## License

**yii2-schema-org** is released under MIT license. See bundled [LICENSE](LICENSE) for details.