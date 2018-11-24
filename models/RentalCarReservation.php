<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A reservation for a rental car.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RentalCarReservation
 */
class RentalCarReservation extends Reservation {
    /**
     * Where a rental car can be dropped off.
     *
     * @var Place
     */
    public $dropoffLocation;

    /**
     * When a rental car can be dropped off.
     *
     * @var string
     */
    public $dropoffTime;

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