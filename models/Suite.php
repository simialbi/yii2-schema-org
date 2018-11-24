<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A suite in a hotel or other public accommodation, denotes a class of luxury
 * accommodations, the key feature of which is multiple rooms (Source: Wikipedia,
 * the free encyclopedia, see http://en.wikipedia.org/wiki/Suite_(hotel)).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Suite
 */
class Suite extends Accommodation {
    /**
     * The type of bed or beds included in the accommodation. For the single case of
     * just one bed of a certain type, you use bed directly with a text.
     *       If you want to indicate the quantity of a certain kind of bed, use an
     * instance of BedDetails. For more detailed information, use the amenityFeature
     * property.
     *
     * @var BedDetails|BedType|string
     */
    public $bed;

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