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
<?php foreach (explode("\n", $class['description']) as $chunk) : ?>
 * <?= wordwrap($chunk, 75, "\n * ") . "\n" ?>
<?php endforeach ?>
 *
 * @see http://schema.org/<?= $class['name'] . "\n" ?>
 */
class <?= $class['name'] ?> extends Model
{
    use traits\<?= $class['name'] . "Trait;\n" ?>
}
