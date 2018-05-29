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

/**
 * Model for <?php echo $className."\n";?>
 *
 * @package simialbi\yii2\schemaorg\models
 * @see <?php echo $url."\n";?>
 */
class <?php echo $className;?> extends <?php echo $parent;?> {
<?php
foreach ($properties as $property) {
?>
	/**
	* @var <?php echo $property['type'];?> <?php echo str_replace(["\r", "\n"], ['', "\n\t* "], $property['description'])."\n";?>
	*/
	public $<?php echo $property['name'];?>;

<?php
}

if ($className === 'SearchAction') {
?>
	/**
	* @var string Query input param
	*/
	public $query_input = 'required';
<?php
}
?>
}