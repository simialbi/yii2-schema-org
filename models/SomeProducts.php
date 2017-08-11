<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for SomeProducts
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SomeProducts
 */
class SomeProducts extends Product {
	/**
	* @var QuantitativeValue The current approximate inventory level for the item or items.
	*/
	public $inventoryLevel;

}