<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An apartment (in American English) or flat (in British English) is a
 * self-contained housing unit (a type of residential real estate) that occupies
 * only part of a building (Source: Wikipedia, the free encyclopedia, see
 * http://en.wikipedia.org/wiki/Apartment).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Apartment
 */
class Apartment extends Accommodation {
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
     * The allowed total occupancy for the accommodation in persons (including infants
     * etc). For individual accommodations, this is not necessarily the legal maximum
     * but defines the permitted usage as per the contractual agreement (e.g. a double
     * room used by a single person).
     * Typical unit code(s): C62 for person
     *
     * @var QuantitativeValue
     */
    public $occupancy;

}