<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for LodgingReservation
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LodgingReservation
 */
class LodgingReservation extends Reservation {
	/**
	* @var string The earliest someone may check into a lodging establishment.
	*/
	public $checkinTime;

	/**
	* @var string The latest someone may check out of a lodging establishment.
	*/
	public $checkoutTime;

	/**
	* @var string A full description of the lodging unit.
	*/
	public $lodgingUnitDescription;

	/**
	* @var QualitativeValue|string Textual description of the unit type (including suite vs. room, size of bed, etc.).
	*/
	public $lodgingUnitType;

	/**
	* @var integer|QuantitativeValue The number of adults staying in the unit.
	*/
	public $numAdults;

	/**
	* @var integer|QuantitativeValue The number of children staying in the unit.
	*/
	public $numChildren;

}