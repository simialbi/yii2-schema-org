<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An accommodation is a place that can accommodate human beings, e.g. a hotel
 * room, a camping pitch, or a meeting room. Many accommodations are for overnight
 * stays, but this is not a mandatory requirement.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Accommodation
 */
class Accommodation extends Place {
    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This
     * generic property does not make a statement about whether the feature is included
     * in an offer for the main accommodation or available at extra costs.
     *
     * @var LocationFeatureSpecification
     */
    public $amenityFeature;

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot.
     * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for
     * square yard
     *
     * @var QuantitativeValue
     */
    public $floorSize;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or
     * lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be
     * put in the unitText property of the QuantitativeValue.
     *
     * @var integer|QuantitativeValue
     */
    public $numberOfRooms;

    /**
     * Indications regarding the permitted usage of the accommodation.
     *
     * @var string
     */
    public $permittedUsage;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @var boolean|string
     */
    public $petsAllowed;

}