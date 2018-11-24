<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A compound price specification is one that bundles multiple prices that all
 * apply in combination for different dimensions of consumption. Use the name
 * property of the attached unit price specification for indicating the dimension
 * of a price component (e.g. "electricity" or "final cleaning").
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CompoundPriceSpecification
 */
class CompoundPriceSpecification extends PriceSpecification {
    /**
     * This property links to all UnitPriceSpecification nodes that apply in parallel
     * for the CompoundPriceSpecification node.
     *
     * @var UnitPriceSpecification
     */
    public $priceComponent;


}