<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for DeliveryEvent
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DeliveryEvent
 */
class DeliveryEvent extends Event {
	/**
	* @var string Password, PIN, or access code needed for delivery (e.g. from a locker).
	*/
	public $accessCode;

	/**
	* @var string When the item is available for pickup from the store, locker, etc.
	*/
	public $availableFrom;

	/**
	* @var string After this date, the item will no longer be available for pickup.
	*/
	public $availableThrough;

	/**
	* @var DeliveryMethod Method used for delivery or shipping.
	*/
	public $hasDeliveryMethod;

}