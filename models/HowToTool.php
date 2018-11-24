<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A tool used (but not consumed) when performing instructions for how to achieve a
 * result.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowToTool
 */
class HowToTool extends HowToItem {
    /**
     * The required quantity of the item(s).
     *
     * @var integer|QuantitativeValue|string
     */
    public $requiredQuantity;

}