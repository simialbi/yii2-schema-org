<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MonetaryAmount
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MonetaryAmount
 */
class MonetaryAmount extends StructuredValue {
	/**
	* @var string The currency in which the monetary amount is expressed (in 3-letter ISO 4217 format).
	*/
	public $currency;

	/**
	* @var integer The upper value of some characteristic or property.
	*/
	public $maxValue;

	/**
	* @var integer The lower value of some characteristic or property.
	*/
	public $minValue;

	/**
	* @var string The date when the item becomes valid.
	*/
	public $validFrom;

	/**
	* @var string The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	*/
	public $validThrough;

	/**
	* @var boolean|integer|StructuredValue|string The value of the quantitative value or property value node.

For QuantitativeValue and MonetaryAmount, the recommended type for values is 'Number'.
For PropertyValue, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.
	*/
	public $value;

}