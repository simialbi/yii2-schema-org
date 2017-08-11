<?php
/**
 * @link https://github.com/nirvana-msu/yii2-jsonld-helper
 * @link https://github.com/simialbi/yii2-schema-org
 * @copyright Copyright (c) 2016 Alexander Stepanov
 * @copyright Copyright (c) 2017 Simon Karlen
 * @license MIT
 */

namespace simialbi\yii2\schemaorg\helpers;

use simialbi\yii2\schemaorg\models\BreadcrumbList;
use simialbi\yii2\schemaorg\models\ListItem;
use simialbi\yii2\schemaorg\models\Model;
use simialbi\yii2\schemaorg\models\Thing;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;

/**
 * Helper class for registering structured data markup in JSON-LD format
 *
 * @author Alexander Stepanov <student_vmk@mail.ru>
 * @author Simon Karlen <simi.albi@gmail.com>
 */
class JsonLDHelper {
	/**
	 * @var Model[] Keeps schema org models wich will be displayed on page
	 */
	private static $models = [];

	/**
	 * Adds BreadcrumbList schema.org markup based on the application view `breadcrumbs` parameter
	 */
	public static function addBreadCrumbList() {
		$view = Yii::$app->view;

		$breadcrumbs    = ArrayHelper::getValue($view->params, 'breadcrumbs', []);
		$breadcrumbList = new BreadcrumbList();
		if (!empty($breadcrumbs)) {
			$position = 1;
			foreach ($breadcrumbs as $breadcrumb) {
				$listItem           = new ListItem();
				$listItem->position = $position;
				if (is_array($breadcrumb)) {
					$listItem->item = [
						'@id'  => Url::to(ArrayHelper::getValue($breadcrumb, 'url', ''), true),
						'name' => ArrayHelper::getValue($breadcrumb, 'label', '')
					];
				} else {
					$listItem->item       = new Thing();
					$listItem->item->name = $breadcrumb;
				}
				$breadcrumbList->itemListElement[] = $listItem;
			}
		}

		self::add($breadcrumbList);
	}

	/**
	 * Add model to json+ld rendering queue
	 *
	 * @param Model $model
	 */
	public static function add($model) {
		self::$models[] = $model;
	}

	/**
	 * Renders ld+json data
	 */
	public static function render() {
		if (!empty(self::$models)) {
			foreach (self::$models as $model) {
				echo Html::script(Json::encode($model->toJsonLDArray(), ['type' => 'application/ld+json']));
			}
		}
	}
}