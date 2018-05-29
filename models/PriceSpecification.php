<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PriceSpecification
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PriceSpecification
 */
class PriceSpecification extends StructuredValue {
	/**
	* @var QuantitativeValue The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
	*/
	public $eligibleQuantity;

	/**
	* @var PriceSpecification The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
	*/
	public $eligibleTransactionVolume;

	/**
	* @var integer The highest price if the price is a range.
	*/
	public $maxPrice;

	/**
	* @var integer The lowest price if the price is a range.
	*/
	public $minPrice;

	/**
	* @var integer|string The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
	* 
	* Usage guidelines:
	* 
	* Use the priceCurrency property (with ISO 4217 codes e.g. "USD") instead of
	*   including ambiguous symbols such as '$' in the value.
	* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
	* Note that both RDFa and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.
	* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.
	*/
	public $price;

	/**
	* @var string The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
	*/
	public $priceCurrency;

	/**
	* @var string The date when the item becomes valid.
	*/
	public $validFrom;

	/**
	* @var string The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	*/
	public $validThrough;

	/**
	* @var boolean Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
	*/
	public $valueAddedTaxIncluded;

}