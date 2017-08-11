<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for TrainTrip
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TrainTrip
 */
class TrainTrip extends Intangible {
	/**
	* @var string The platform where the train arrives.
	*/
	public $arrivalPlatform;

	/**
	* @var TrainStation The station where the train trip ends.
	*/
	public $arrivalStation;

	/**
	* @var string The expected arrival time.
	*/
	public $arrivalTime;

	/**
	* @var string The platform from which the train departs.
	*/
	public $departurePlatform;

	/**
	* @var TrainStation The station from which the train departs.
	*/
	public $departureStation;

	/**
	* @var string The expected departure time.
	*/
	public $departureTime;

	/**
	* @var Organization|Person The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	*/
	public $provider;

	/**
	* @var string The name of the train (e.g. The Orient Express).
	*/
	public $trainName;

	/**
	* @var string The unique identifier for the train.
	*/
	public $trainNumber;

}