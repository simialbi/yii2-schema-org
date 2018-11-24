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
 * <?= wordwrap($description, 80, "\n * ") . "\n" ?>
 *
 * @package simialbi\yii2\schemaorg\models
 * @see <?= $url . "\n" ?>
 */
class <?= $className ?> extends <?= $parent ?> {
<?php foreach ($properties as $property) : ?>
    /**
     * <?= wordwrap(str_replace(["\r", "\n"], ['', "\n     * "], $property['description']), 80, "\n     * ") . "\n" ?>
     *
     * @var <?= $property['type'] . "\n" ?>
     */
    public $<?= $property['name']; ?>;

<?php endforeach ?>
<?php if ($className === 'SearchAction') : ?>

    /**
     * @var string Query input param
     */
    public $query_input = 'required';
<?php endif ?>
}