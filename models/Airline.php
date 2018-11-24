<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An organization that provides flights for passengers.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Airline
 */
class Airline extends Organization {
    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @var BoardingPolicyType
     */
    public $boardingPolicy;

    /**
     * IATA identifier for an airline or airport.
     *
     * @var string
     */
    public $iataCode;

}