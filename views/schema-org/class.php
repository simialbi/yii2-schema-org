<?php

/** @var $this \yii\web\View */
/** @var $class array */
/** @var $traits array */
/** @var $namespace string */

echo '<?php' . "\n";
?>

namespace <?= $namespace ?>;

use simialbi\yii2\schemaorg\models\Model;

/**
 * <?= wordwrap($class['description'], 75, "\n * ") . "\n" ?>
 *
 * @see http://schema.org/<?= $class['name'] . "\n" ?>
 */
class <?= $class['name'] ?> extends Model
{
    use <?= $class['name'] . "Trait;\n" ?>
}
