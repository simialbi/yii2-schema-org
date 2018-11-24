<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A house is a building or structure that has the ability to be occupied for
 * habitation by humans or other creatures (Source: Wikipedia, the free
 * encyclopedia, see http://en.wikipedia.org/wiki/House).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/House
 */
class House extends Accommodation {
    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or
     * lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be
     * put in the unitText property of the QuantitativeValue.
     *
     * @var integer|QuantitativeValue
     */
    public $numberOfRooms;


}