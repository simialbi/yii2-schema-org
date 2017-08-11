<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Airport
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Airport
 */
class Airport extends CivicStructure {
	/**
	* @var string IATA identifier for an airline or airport.
	*/
	public $iataCode;

	/**
	* @var string ICAO identifier for an airport.
	*/
	public $icaoCode;

}