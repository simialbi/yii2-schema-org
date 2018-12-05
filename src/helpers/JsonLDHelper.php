<?php
/**
 * @link https://github.com/nirvana-msu/yii2-jsonld-helper
 * @link https://github.com/simialbi/yii2-schema-org
 * @copyright Copyright (c) 2016 Alexander Stepanov
 * @copyright Copyright (c) 2017 Simon Karlen
 * @license MIT
 */

namespace simialbi\yii2\schemaorg\helpers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;

/**
 * Helper class for registering structured data markup in JSON-LD format
 *
 * @author Alexander Stepanov <student_vmk@mail.ru>
 * @author Simon Karlen <simi.albi@outlook.com>
 * @author Mehdi Achour <machour@gmail.com>
 */
class JsonLDHelper
{
    /**
     * @var \simialbi\yii2\schemaorg\models\Model[] Keeps schema org models wich will be displayed on page
     */
    private static $_models = [];

    /**
     * Adds BreadcrumbList schema.org markup based on the application view `breadcrumbs` parameter
     * @throws \yii\base\InvalidConfigException
     */
    public static function addBreadCrumbList()
    {
        if (!class_exists('\simialbi\yii2\schemaorg\models\BreadcrumbList')) {
            return;
        }

        $view = Yii::$app->view;

        /* @var $breadcrumbList \simialbi\yii2\schemaorg\models\Model */
        $breadcrumbs = ArrayHelper::getValue($view->params, 'breadcrumbs', []);
        $breadcrumbList = Yii::createObject([
            'class' => 'simialbi\yii2\schemaorg\models\BreadcrumbList'
        ]);
        if (!empty($breadcrumbs)) {
            $position = 1;
            foreach ($breadcrumbs as $breadcrumb) {
                $listItem = Yii::createObject([
                    'class' => 'simialbi\yii2\schemaorg\models\ListItem',
                    'position' => $position++
                ]);
                if (is_array($breadcrumb)) {
                    $listItem->item = [
                        '@id' => Url::to(ArrayHelper::getValue($breadcrumb, 'url', ''), true),
                        'name' => ArrayHelper::getValue($breadcrumb, 'label', '')
                    ];
                } else {
                    $listItem->item = [
                        '@id' => Yii::$app->request->absoluteUrl,
                        'name' => $breadcrumb
                    ];
                }
                $breadcrumbList->itemListElement[] = $listItem;
            }
        }

        self::add($breadcrumbList);
    }

    /**
     * Add model to json+ld rendering queue
     *
     * @param \simialbi\yii2\schemaorg\models\Model $model
     */
    public static function add($model)
    {
        self::$_models[] = $model;
    }

    /**
     * Renders ld+json data
     */
    public static function render()
    {
        if (!empty(self::$_models)) {
            foreach (self::$_models as $model) {
                try {
                    echo Html::script(Json::encode($model->toJsonLDArray()), ['type' => 'application/ld+json']) . "\n";
                } catch (InvalidArgumentException $e) {
                    $logger = Yii::$app->log->logger;
                    $logger->log($e->getMessage(), $logger::LEVEL_ERROR);
                }
            }
        }
    }
}