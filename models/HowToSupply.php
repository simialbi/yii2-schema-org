<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for HowToSupply
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowToSupply
 */
class HowToSupply extends HowToItem {
	/**
	* @var MonetaryAmount|string The estimated cost of the supply or supplies consumed when performing instructions.
	*/
	public $estimatedCost;

}