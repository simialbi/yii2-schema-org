# yii2-schema-org

Schema.org yii2 representation and helpers for json-ld generation.

[![Latest Stable Version](https://poser.pugx.org/simialbi/yii2-schema-org/v/stable?format=flat-square)](https://packagist.org/packages/simialbi/yii2-schema-org)
[![Total Downloads](https://poser.pugx.org/simialbi/yii2-schema-org/downloads?format=flat-square)](https://packagist.org/packages/simialbi/yii2-schema-org)
![Build Status](https://github.com/simialbi/yii2-schema-org/workflows/build/badge.svg)
[![License](https://poser.pugx.org/simialbi/yii2-schema-org/license?format=flat-square)](https://packagist.org/packages/simialbi/yii2-schema-org)

## Resources
 * JSON-LD [documentation](http://json-ld.org/learn.html)
 * Google [Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool)
 
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require --prefer-dist simialbi/yii2-schema-org
```

or add 

```
"simialbi/yii2-schema-org": "^2.0.0"
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

#### Minimal (standard) configuration

Without passing any parameters **all** schemas will be generated in the folder `@vendor/simialbi/yii2-schema-org/src/models`.
The namespace of the models will be `simialbi\yii2\schemaorg\models`.
```bash
$ php yii schema/models/generate
```

#### Customized

If you want to customize the namespace and path you can do it via `--namespace` and `--folder` parameters. E.g. to generate
schemas `Car` and `AutoDealer` in `common/schemas` with `common\schemas` namespace: 
 ```bash
$ php yii schema/models/generate 'latest' --schemas=Car,AutoDealer --namespace='common\schemas' --folder='@common/schemas/'
```

| Parameter      | Description                                                                                              |
|----------------|----------------------------------------------------------------------------------------------------------|
| `version`      | The [schemas.org version](https://schema.org/docs/releases.html) to use. Defaults to `latest`            | 
| `--schemas`    | A comma separated list of schemas you intend to use. Empty means all. Defaults to `[]`                   |
| `--namespace`  | The namespace to use for the generated classes and traits. Defaults to `simialbi\yii2\schemaorg\models`  |
| `--folder`     | The folder where to put the generated files. Defaults to `@simialbi/yii2/schemaorg/src/models`           |
| `--remove-old` | Whether to remove old files before generating. Defaults to `false`                                       |

The console command will take care of computing schemas dependencies and will generate the classes based on your needs.

### Autmatic model update on composer update
If you'd like to always update your schema when you run `composer update` you can configure your composer.json like this:
```json
{
  // [...]
  "require": {
    "yiisoft/yii2": "^2.0.13",
    "simialbi/yii2-schema-org": "^2.0.0"
  },
  "scripts": {
    "post-update-cmd": [
      "simialbi\\yii2\\schemaorg\\composer\\Installer::postInstallUpdate"
    ]
  },
  "extra": {
    "simialbi\\yii2\\schemaorg\\composer\\Installer::postInstallUpdate": {
      "generateModels": {
        "schemas": ["Car", "AutoDealer"], // optional
        "namespace": "common\\schemas", // optional
        "folder": "common/schema" // optional
      }
    }
  }
  // [...]
}
```

## Example Usage
To e.g. add a person to json+ld, you can do the following:

```php
use simialbi\yii2\schemaorg\helpers\JsonLDHelper;
use simialbi\yii2\schemaorg\models\Person;

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