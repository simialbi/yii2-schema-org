<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A monetary value or range. This type can be used to describe an amount of money
 * such as $50 USD, or a range as in describing a bank account being suitable for a
 * balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc. It
 * is recommended to use PriceSpecification Types to describe the price of an
 * Offer, Invoice, etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MonetaryAmount
 */
class MonetaryAmount extends StructuredValue {
    /**
     * The currency in which the monetary amount is expressed.
     * 
     * Use standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol for
     * cryptocurrencies e.g. "BTC"; well known names for Local Exchange Tradings
     * Systems (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     * @var string
     */
    public $currency;

    /**
     * The upper value of some characteristic or property.
     *
     * @var integer
     */
    public $maxValue;

    /**
     * The lower value of some characteristic or property.
     *
     * @var integer
     */
    public $minValue;

    /**
     * The date when the item becomes valid.
     *
     * @var string
     */
    public $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @var string
     */
    public $validThrough;

    /**
     * The value of the quantitative value or property value node.
     * 
     * 
     * For QuantitativeValue and MonetaryAmount, the recommended type for values is
     * 'Number'.
     * For PropertyValue, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.
     *
     * @var boolean|integer|StructuredValue|string
     */
    public $value;

}