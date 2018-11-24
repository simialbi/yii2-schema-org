<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A point value or interval for product characteristics and other purposes.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/QuantitativeValue
 */
class QuantitativeValue extends StructuredValue {
    /**
     * A property-value pair representing an additional characteristics of the
     * entitity, e.g. a product feature or another characteristic for which there is no
     * matching property in schema.org.
     * 
     * Note: Publishers should be aware that applications designed to use specific
     * schema.org properties (e.g. http://schema.org/width, http://schema.org/color,
     * http://schema.org/gtin13, ...) will typically expect such data to be provided
     * using those properties, rather than using the generic property/value mechanism.
     *
     * @var PropertyValue
     */
    public $additionalProperty;

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
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or
     * a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix
     * followed by a colon.
     *
     * @var string
     */
    public $unitCode;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * unitCode.
     *
     * @var string
     */
    public $unitText;

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

    /**
     * A pointer to a secondary value that provides additional information on the
     * original value, e.g. a reference temperature.
     *
     * @var Enumeration|PropertyValue|QualitativeValue|QuantitativeValue|StructuredValue
     */
    public $valueReference;


}