<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for CompoundPriceSpecification
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CompoundPriceSpecification
 */
class CompoundPriceSpecification extends PriceSpecification {
	/**
	* @var UnitPriceSpecification This property links to all UnitPriceSpecification nodes that apply in parallel for the CompoundPriceSpecification node.
	*/
	public $priceComponent;

}