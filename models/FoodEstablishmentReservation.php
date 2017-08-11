<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for FoodEstablishmentReservation
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/FoodEstablishmentReservation
 */
class FoodEstablishmentReservation extends Reservation {
	/**
	* @var string The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to December.

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	*/
	public $endTime;

	/**
	* @var integer|QuantitativeValue Number of people the reservation should accommodate.
	*/
	public $partySize;

	/**
	* @var string The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to December.

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	*/
	public $startTime;

}