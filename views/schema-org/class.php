<?php

/** @var $this \yii\web\View */
/** @var $class array */
/** @var $traits array */
/** @var $namespace string */

echo '<?php' . "\n";
?>

namespace <?= $namespace ?>;

/**
 * <?= wordwrap($class['description'], 75, "\n * ") . "\n" ?>
 *
 * @see http://schema.org/<?= $class['name'] . "\n" ?>
 */
class <?= $class['name'] ?> extends \simialbi\yii2\schemaorg\models\Model
{
    /**
     * @see http://schema.org/<?= $class['name'] . "\n" ?>
     */
    use <?= $class['name'] . "Trait;\n" ?>


}
