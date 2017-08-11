<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for RentalCarReservation
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RentalCarReservation
 */
class RentalCarReservation extends Reservation {
	/**
	* @var Place Where a rental car can be dropped off.
	*/
	public $dropoffLocation;

	/**
	* @var string When a rental car can be dropped off.
	*/
	public $dropoffTime;

	/**
	* @var Place Where a taxi will pick up a passenger or a rental car can be picked up.
	*/
	public $pickupLocation;

	/**
	* @var string When a taxi will pickup a passenger or a rental car can be picked up.
	*/
	public $pickupTime;

}