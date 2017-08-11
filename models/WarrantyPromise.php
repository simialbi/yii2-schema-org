<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for WarrantyPromise
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/WarrantyPromise
 */
class WarrantyPromise extends StructuredValue {
	/**
	* @var QuantitativeValue The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
	*/
	public $durationOfWarranty;

	/**
	* @var WarrantyScope The scope of the warranty promise.
	*/
	public $warrantyScope;

}