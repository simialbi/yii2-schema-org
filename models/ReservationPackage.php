<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ReservationPackage
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReservationPackage
 */
class ReservationPackage extends Reservation {
	/**
	* @var Reservation The individual reservations included in the package. Typically a repeated property.
	*/
	public $subReservation;

}