<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ParcelDelivery
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ParcelDelivery
 */
class ParcelDelivery extends Intangible {
	/**
	* @var PostalAddress Destination address.
	*/
	public $deliveryAddress;

	/**
	* @var DeliveryEvent New entry added as the package passes through each leg of its journey (from shipment to final delivery).
	*/
	public $deliveryStatus;

	/**
	* @var string The earliest date the package may arrive.
	*/
	public $expectedArrivalFrom;

	/**
	* @var string The latest date the package may arrive.
	*/
	public $expectedArrivalUntil;

	/**
	* @var DeliveryMethod Method used for delivery or shipping.
	*/
	public $hasDeliveryMethod;

	/**
	* @var Product Item(s) being shipped.
	*/
	public $itemShipped;

	/**
	* @var PostalAddress Shipper's address.
	*/
	public $originAddress;

	/**
	* @var Order The overall order the items in this delivery were included in.
	*/
	public $partOfOrder;

	/**
	* @var Organization|Person The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	*/
	public $provider;

	/**
	* @var string Shipper tracking number.
	*/
	public $trackingNumber;

	/**
	* @var string Tracking url for the parcel delivery.
	*/
	public $trackingUrl;

}