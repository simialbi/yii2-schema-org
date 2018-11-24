<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Used to describe a seat, such as a reserved seat in an event reservation.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Seat
 */
class Seat extends Intangible {
    /**
     * The location of the reserved seat (e.g., 27).
     *
     * @var string
     */
    public $seatNumber;

    /**
     * The row location of the reserved seat (e.g., B).
     *
     * @var string
     */
    public $seatRow;

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     *
     * @var string
     */
    public $seatSection;

    /**
     * The type/class of the seat.
     *
     * @var QualitativeValue|string
     */
    public $seatingType;


}