<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for BusTrip
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BusTrip
 */
class BusTrip extends Intangible {
	/**
	* @var BusStation|BusStop The stop or station from which the bus arrives.
	*/
	public $arrivalBusStop;

	/**
	* @var string The expected arrival time.
	*/
	public $arrivalTime;

	/**
	* @var string The name of the bus (e.g. Bolt Express).
	*/
	public $busName;

	/**
	* @var string The unique identifier for the bus.
	*/
	public $busNumber;

	/**
	* @var BusStation|BusStop The stop or station from which the bus departs.
	*/
	public $departureBusStop;

	/**
	* @var string The expected departure time.
	*/
	public $departureTime;

	/**
	* @var Organization|Person The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	*/
	public $provider;

}