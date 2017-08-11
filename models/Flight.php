<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Flight
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Flight
 */
class Flight extends Intangible {
	/**
	* @var string|Vehicle The kind of aircraft (e.g., "Boeing 747").
	*/
	public $aircraft;

	/**
	* @var Airport The airport where the flight terminates.
	*/
	public $arrivalAirport;

	/**
	* @var string Identifier of the flight's arrival gate.
	*/
	public $arrivalGate;

	/**
	* @var string Identifier of the flight's arrival terminal.
	*/
	public $arrivalTerminal;

	/**
	* @var string The expected arrival time.
	*/
	public $arrivalTime;

	/**
	* @var BoardingPolicyType The type of boarding policy used by the airline (e.g. zone-based or group-based).
	*/
	public $boardingPolicy;

	/**
	* @var Airport The airport where the flight originates.
	*/
	public $departureAirport;

	/**
	* @var string Identifier of the flight's departure gate.
	*/
	public $departureGate;

	/**
	* @var string Identifier of the flight's departure terminal.
	*/
	public $departureTerminal;

	/**
	* @var string The expected departure time.
	*/
	public $departureTime;

	/**
	* @var Duration|string The estimated time the flight will take.
	*/
	public $estimatedFlightDuration;

	/**
	* @var Distance|string The distance of the flight.
	*/
	public $flightDistance;

	/**
	* @var string The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
	*/
	public $flightNumber;

	/**
	* @var string Description of the meals that will be provided or available for purchase.
	*/
	public $mealService;

	/**
	* @var Organization|Person The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	*/
	public $provider;

	/**
	* @var Organization|Person An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider. Supersedes merchant, vendor.
	*/
	public $seller;

	/**
	* @var string The time when a passenger can check into the flight online.
	*/
	public $webCheckinTime;

}