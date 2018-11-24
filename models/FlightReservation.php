<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A reservation for air travel.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/FlightReservation
 */
class FlightReservation extends Reservation {
    /**
     * The airline-specific indicator of boarding order / preference.
     *
     * @var string
     */
    public $boardingGroup;

    /**
     * The priority status assigned to a passenger for security or boarding (e.g.
     * FastTrack or Priority).
     *
     * @var QualitativeValue|string
     */
    public $passengerPriorityStatus;

    /**
     * The passenger's sequence number as assigned by the airline.
     *
     * @var string
     */
    public $passengerSequenceNumber;

    /**
     * The type of security screening the passenger is subject to.
     *
     * @var string
     */
    public $securityScreening;


}