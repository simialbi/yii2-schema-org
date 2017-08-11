<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Seat
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Seat
 */
class Seat extends Intangible {
	/**
	* @var string The location of the reserved seat (e.g., 27).
	*/
	public $seatNumber;

	/**
	* @var string The row location of the reserved seat (e.g., B).
	*/
	public $seatRow;

	/**
	* @var string The section location of the reserved seat (e.g. Orchestra).
	*/
	public $seatSection;

	/**
	* @var QualitativeValue|string The type/class of the seat.
	*/
	public $seatingType;

}