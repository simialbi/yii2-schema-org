<?php
/**
 * Created by PhpStorm.
 * User: karlen
 * Date: 10.08.2017
 * Time: 09:53
 */

namespace simialbi\yii2\schemaorg;

use yii\base\BootstrapInterface;

class Module extends \yii\base\Module implements BootstrapInterface {
	/**
	 * @var string the namespace that controller classes are in.
	 */
	public $controllerNamespace = 'simialbi\yii2\schemaorg\controllers';

	public $defaultRoute;

	/**
	 * @var string source url
	 */
	public $source = 'http://schema.org/docs/full.html';

	/**
	 * @inheritdoc
	 */
	public function bootstrap($app) {
		if ($app instanceof \yii\console\Application) {
			$this->controllerNamespace = 'simialbi\yii2\schemaorg\commands';
		}
	}
}