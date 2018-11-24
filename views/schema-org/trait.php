<?php

/** @var $this \yii\web\View */
/** @var $class array */
/** @var $properties array */
/** @var $namespace string */

echo '<?php' . "\n";
?>

namespace <?= $namespace ?>;

/**
 * <?= wordwrap($class['description'], 75, "\n * ") . "\n" ?>
 *
 * @see http://schema.org/<?= $class['name'] . "\n" ?>
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
     * @see <?= $property['see'] . "\n" ?>
     */
    public $<?= $property['name'] ?>;

<?php endforeach ?>
}
