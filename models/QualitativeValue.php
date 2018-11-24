<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A predefined value for a product characteristic, e.g. the power cord plug type
 * 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/QualitativeValue
 */
class QualitativeValue extends Enumeration {
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
     * This ordering relation for qualitative values indicates that the subject is
     * equal to the object.
     *
     * @var QualitativeValue
     */
    public $equal;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * greater than the object.
     *
     * @var QualitativeValue
     */
    public $greater;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * greater than or equal to the object.
     *
     * @var QualitativeValue
     */
    public $greaterOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * lesser than the object.
     *
     * @var QualitativeValue
     */
    public $lesser;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * lesser than or equal to the object.
     *
     * @var QualitativeValue
     */
    public $lesserOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is not
     * equal to the object.
     *
     * @var QualitativeValue
     */
    public $nonEqual;

    /**
     * A pointer to a secondary value that provides additional information on the
     * original value, e.g. a reference temperature.
     *
     * @var Enumeration|PropertyValue|QualitativeValue|QuantitativeValue|StructuredValue
     */
    public $valueReference;

}