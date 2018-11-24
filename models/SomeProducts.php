<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A placeholder for multiple similar products of the same kind.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SomeProducts
 */
class SomeProducts extends Product {
    /**
     * The current approximate inventory level for the item or items.
     *
     * @var QuantitativeValue
     */
    public $inventoryLevel;

}