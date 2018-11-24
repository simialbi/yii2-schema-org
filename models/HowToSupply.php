<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A supply consumed when performing the instructions for how to achieve a result.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowToSupply
 */
class HowToSupply extends HowToItem {
    /**
     * The estimated cost of the supply or supplies consumed when performing
     * instructions.
     *
     * @var MonetaryAmount|string
     */
    public $estimatedCost;


}