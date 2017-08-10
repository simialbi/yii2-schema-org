<?php
/**
 * Created by PhpStorm.
 * User: karlen
 * Date: 10.08.2017
 * Time: 11:49
 */

/* @var string $parent */
/* @var string $className */
/* @var string $url */
/* @var array $properties */

echo "<?php\n\n";
?>
namespace simialbi\yii2\schemaorg\models;
<?php
if ($parent === 'Model') {
?>

use yii\base\Model;
<?php
}
?>

/**
 * Model for <?php echo $className;?>
 *
 * @package simialbi\yii2\schemaorg\models
 * @see <?php echo $url;?>
 */
class <?php echo $className;?> extends <?php echo $parent;?> {
<?php
foreach ($properties as $property) {
?>
	/**
	* @var <?php echo $property['type'];?> <?php echo $property['description'];?>
	*/
	public $<?php echo $property['name'];?>;

<?php
}
?>
}