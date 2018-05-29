<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for HowToItem
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowToItem
 */
class HowToItem extends ListItem {
	/**
	* @var integer|QuantitativeValue|string The required quantity of the item(s).
	*/
	public $requiredQuantity;

}