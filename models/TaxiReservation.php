<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A reservation for a taxi.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TaxiReservation
 */
class TaxiReservation extends Reservation {
    /**
     * Number of people the reservation should accommodate.
     *
     * @var integer|QuantitativeValue
     */
    public $partySize;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @var Place
     */
    public $pickupLocation;

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     *
     * @var string
     */
    public $pickupTime;

}