# yii2-schema-org

Schema.org yii2 representation and helpers for json-ld generation.

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

In order to use this module, you will need to:

1. [Configure](#setup-module) your application so that the module is available.
2. [Generate](#model-generation) the Schemas you intend to use.

### Setup Module

Configure the module named `schema` in the modules section of your Yii configuration file.

> Remember to do this for console and for web application configuration file.

```php
'modules' => [
	'schema' => [
		'class' => 'simialbi\yii2\schemaorg\Module',
		//'autoCreate' => false,
		//'autoRender' => false
	]
]
```

Also add the module `schema` to the bootstrap section of your configuration file:
```php
'bootstrap' => ['log', 'schema']
```

| Parameter    | Description                                                     |
|--------------|-----------------------------------------------------------------|
| `autoCreate` | Automatically create breadcrumbs `json+ld` data.                | 
| `autoRender` | Automatically render `json+ld` data at the end of body section. |

*If you don't use `autoRender`, be sure to manually call `JsonLDHelper::render()` in your layout file, like so:*


```php
<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
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
$ php yii schema/schema-org [version] --schemas=Car,AutoDealer --namespace='common\schemas' --folder common/schemas/
```

| Parameter      | Description                                                                                   |
|----------------|-----------------------------------------------------------------------------------------------|
| `version`      | The [schemas.org version](https://schema.org/docs/releases.html) to use. Default to `latest`. | 
| `--schemas`    | A comma separated list of schemas you intend to use. **Required**                             |
| `--namespace`  | The namespace to use for the generated classes and traits. **Required**                       |
| `--folder`     | The folder where to put the generated files. **Required**                                     |
| `--remove-old` | Whether to remove old files before generating. Default to `false`                             |

The console command will take care of computing schemas dependencies and will generate two types of entitites:
  * **Classes:** the classes you explicitely requested in `--schema` and that you will be using in your pages.
  * **Traits:** one trait per class dependency.
   
> **Technical Note:** 
> We use traits because of some cases of multiple-inheritance in Schema.org, as it's the case for
> [LocalBusiness](https://schema.org/AutomotiveBusiness) which extends either `Place` or `Organization`.  

## Example Usage
To e.g. add a person to json+ld, you can do the following:

```php
use simialbi\yii2\schemaorg\helpers\JsonLDHelper;
use common\schemas\Person;

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