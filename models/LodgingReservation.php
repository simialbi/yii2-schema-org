<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A reservation for lodging at a hotel, motel, inn, etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LodgingReservation
 */
class LodgingReservation extends Reservation {
    /**
     * The earliest someone may check into a lodging establishment.
     *
     * @var string
     */
    public $checkinTime;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @var string
     */
    public $checkoutTime;

    /**
     * A full description of the lodging unit.
     *
     * @var string
     */
    public $lodgingUnitDescription;

    /**
     * Textual description of the unit type (including suite vs. room, size of bed,
     * etc.).
     *
     * @var QualitativeValue|string
     */
    public $lodgingUnitType;

    /**
     * The number of adults staying in the unit.
     *
     * @var integer|QuantitativeValue
     */
    public $numAdults;

    /**
     * The number of children staying in the unit.
     *
     * @var integer|QuantitativeValue
     */
    public $numChildren;


}