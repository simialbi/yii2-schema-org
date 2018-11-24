<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An airline flight.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Flight
 */
class Flight extends Trip {
    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @var string|Vehicle
     */
    public $aircraft;

    /**
     * The airport where the flight terminates.
     *
     * @var Airport
     */
    public $arrivalAirport;

    /**
     * Identifier of the flight's arrival gate.
     *
     * @var string
     */
    public $arrivalGate;

    /**
     * Identifier of the flight's arrival terminal.
     *
     * @var string
     */
    public $arrivalTerminal;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @var BoardingPolicyType
     */
    public $boardingPolicy;

    /**
     * The airport where the flight originates.
     *
     * @var Airport
     */
    public $departureAirport;

    /**
     * Identifier of the flight's departure gate.
     *
     * @var string
     */
    public $departureGate;

    /**
     * Identifier of the flight's departure terminal.
     *
     * @var string
     */
    public $departureTerminal;

    /**
     * The estimated time the flight will take.
     *
     * @var Duration|string
     */
    public $estimatedFlightDuration;

    /**
     * The distance of the flight.
     *
     * @var Distance|string
     */
    public $flightDistance;

    /**
     * The unique identifier for a flight including the airline IATA code. For example,
     * if describing United flight 110, where the IATA code for United is 'UA', the
     * flightNumber is 'UA110'.
     *
     * @var string
     */
    public $flightNumber;

    /**
     * Description of the meals that will be provided or available for purchase.
     *
     * @var string
     */
    public $mealService;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A
     * seller may also be a provider. Supersedes merchant, vendor.
     *
     * @var Organization|Person
     */
    public $seller;

    /**
     * The time when a passenger can check into the flight online.
     *
     * @var string
     */
    public $webCheckinTime;


}