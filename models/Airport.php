<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An airport.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Airport
 */
class Airport extends CivicStructure {
    /**
     * IATA identifier for an airline or airport.
     *
     * @var string
     */
    public $iataCode;

    /**
     * ICAO identifier for an airport.
     *
     * @var string
     */
    public $icaoCode;


}