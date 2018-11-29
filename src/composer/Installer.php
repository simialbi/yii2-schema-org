<?php
/**
 * @package yii2-schema-org
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\schemaorg\composer;


use Composer\Script\Event;
use Yii;
use yii\helpers\ArrayHelper;

class Installer
{
    /**
     * Special method to run tasks defined in `[extra][yii\composer\Installer::postInstallUpdate]` key in `composer.json`
     *
     * @param Event $event
     * @since 2.0.5
     */
    public static function postInstallUpdate($event)
    {
        static::runCommands($event, __METHOD__);
    }

    /**
     * Special method to run tasks defined in `[extra][$extraKey]` key in `composer.json`
     *
     * @param Event $event
     * @param string $extraKey
     */
    protected static function runCommands($event, $extraKey)
    {
        $params = $event->getComposer()->getPackage()->getExtra();
        if (isset($params[$extraKey]) && is_array($params[$extraKey])) {
            foreach ($params[$extraKey] as $method => $args) {
                $args = array_merge([
                    'vendorPath' => $event->getComposer()->getConfig()->get('vendor-dir')
                ], (array)$args);
                call_user_func([__CLASS__, $method], $args);
            }
        }
    }

    /**
     * Run model generation action
     *
     * @param array $config Configuration for model generation
     *
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\console\Exception
     * @throws \yii\base\InvalidRouteException
     */
    public static function generateModels(array $config)
    {
        $schemas = ArrayHelper::getValue($config, 'schemas', []);
        $namespace = ArrayHelper::getValue($config, 'namespace', 'simialbi\yii2\schemaorg\models');
        $folder = ArrayHelper::getValue($config, 'folder', sprintf(
            '%1$s%2$ssimialbi%2$syii2-schema-org%2$ssrc%2$smodels',
            $config['vendorPath'],
            DIRECTORY_SEPARATOR
        ));
        $removeOld = ArrayHelper::getValue($config, 'removeOld', true);

        require_once $config['vendorPath'] . DIRECTORY_SEPARATOR . 'autoload.php';
        require_once $config['vendorPath'] . DIRECTORY_SEPARATOR . 'yiisoft' . DIRECTORY_SEPARATOR . 'yii2' . DIRECTORY_SEPARATOR . 'Yii.php';

        Yii::setAlias('@runtime', rtrim(str_replace(['\\', '/'], '/', sys_get_temp_dir()), '/'));

        new \yii\console\Application([
            'id' => 'Commmand runner',
            'basePath' => __DIR__,
            'vendorPath' => $config['vendorPath'],
            'bootstrap' => ['schema'],
            'aliases' => [],
            'modules' => [
                'schema' => [
                    'class' => 'simialbi\yii2\schemaorg\Module'
                ]
            ]
        ]);
        $options = [
            'namespace' => $namespace,
            'folder' => $folder,
            'removeOld' => $removeOld
        ];
        if (!empty($schemas)) {
            $options['schemas'] = implode(',', $schemas);
        }
        Yii::$app->runAction('schema/models/generate', $options);

        Yii::$app = null;
        unset($app);
    }
}