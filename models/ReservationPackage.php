<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A group of multiple reservations with common values for all sub-reservations.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReservationPackage
 */
class ReservationPackage extends Reservation {
    /**
     * The individual reservations included in the package. Typically a repeated
     * property.
     *
     * @var Reservation
     */
    public $subReservation;


}