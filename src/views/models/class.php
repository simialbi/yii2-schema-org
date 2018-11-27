<?php

/** @var $this \yii\web\View */
/** @var $description string */
/** @var $label string */
/** @var $properties array */
/** @var $namespace string */

echo '<?php' . "\n";
?>

namespace <?= $namespace ?>;

use simialbi\yii2\schemaorg\models\Model;

/**
<?php foreach (explode("\n", $description) as $chunk) : ?>
 * <?= wordwrap($chunk, 75, "\n * ") . "\n" ?>
<?php endforeach ?>
 *
 * @see http://schema.org/<?= $label . "\n" ?>
 */
class <?= $label ?> extends Model
{
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
