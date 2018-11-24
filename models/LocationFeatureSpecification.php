<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Specifies a location feature by providing a structured value representing a
 * feature of an accommodation as a property-value pair of varying degrees of
 * formality.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LocationFeatureSpecification
 */
class LocationFeatureSpecification extends PropertyValue {
    /**
     * The hours during which this service or contact is available.
     *
     * @var OpeningHoursSpecification
     */
    public $hoursAvailable;

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


}