<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for OrderItem
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OrderItem
 */
class OrderItem extends Intangible {
	/**
	* @var ParcelDelivery The delivery of the parcel related to this order or order item.
	*/
	public $orderDelivery;

	/**
	* @var string The identifier of the order item.
	*/
	public $orderItemNumber;

	/**
	* @var OrderStatus The current status of the order item.
	*/
	public $orderItemStatus;

	/**
	* @var integer The number of the item ordered. If the property is not set, assume the quantity is one.
	*/
	public $orderQuantity;

	/**
	* @var OrderItem|Product The item ordered.
	*/
	public $orderedItem;

}