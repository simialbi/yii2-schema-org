<?php
/**
 * Created by PhpStorm.
 * User: karlen
 * Date: 10.08.2017
 * Time: 11:49
 */

echo '<?php\n\n';
?>
namespace simialbi\yii2\schemaorg\commands;
<?php
if ($parent === 'Model') {
?>
use yii\base\Model;
<?php
}
?>

/**
 * Model for <?=$className;?>
 *
 * @package simialbi\yii2\schemaorg\models
 * @see <?=$url;?>
 */