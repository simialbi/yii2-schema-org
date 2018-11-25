<?php

/** @var $this \yii\web\View */
/** @var $class array */
/** @var $properties array */
/** @var $namespace string */
/** @var $traits array */

echo '<?php' . "\n";
?>

namespace <?= $namespace ?>\traits;

/**
<?php foreach (explode("\n", $class['description']) as $chunk) : ?>
 * <?= wordwrap($chunk, 75, "\n * ") . "\n" ?>
<?php endforeach ?>
 *
<?php foreach ($properties as $property) : ?>
 * @property $<?= $property['name'] . "\n" ?>
<?php endforeach ?>
 *
 * @see http://schema.org/<?= $class['schema'] . "\n" ?>
 */
trait <?= $class['name'] . "Trait\n" ?>
{

<?php foreach ($traits as $trait) : ?>
    /**
    * @see http://schema.org/<?= $trait . "\n" ?>
    */
    use <?= $trait . "Trait;\n" ?>
<?php endforeach ?>

<?php foreach ($properties as $property) : ?>
    /**
<?php foreach (explode("\n", $property['description']) as $chunk) : ?>
     * <?= wordwrap($chunk, 75, "\n     * ") . "\n" ?>
<?php endforeach ?>
     *
     * @var <?= implode('|', $property['types']) . "\n" ?>
     * @see <?= $property['see'] . "\n" ?>
     */
    public $<?= $property['name'] ?>;

<?php endforeach ?>
}
