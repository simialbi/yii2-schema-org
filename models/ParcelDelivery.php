<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The delivery of a parcel either via the postal service or a commercial service.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ParcelDelivery
 */
class ParcelDelivery extends Intangible {
    /**
     * Destination address.
     *
     * @var PostalAddress
     */
    public $deliveryAddress;

    /**
     * New entry added as the package passes through each leg of its journey (from
     * shipment to final delivery).
     *
     * @var DeliveryEvent
     */
    public $deliveryStatus;

    /**
     * The earliest date the package may arrive.
     *
     * @var string
     */
    public $expectedArrivalFrom;

    /**
     * The latest date the package may arrive.
     *
     * @var string
     */
    public $expectedArrivalUntil;

    /**
     * Method used for delivery or shipping.
     *
     * @var DeliveryMethod
     */
    public $hasDeliveryMethod;

    /**
     * Item(s) being shipped.
     *
     * @var Product
     */
    public $itemShipped;

    /**
     * Shipper's address.
     *
     * @var PostalAddress
     */
    public $originAddress;

    /**
     * The overall order the items in this delivery were included in.
     *
     * @var Order
     */
    public $partOfOrder;

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on behalf
     * of the provider. A provider may also serve as the seller. Supersedes carrier.
     *
     * @var Organization|Person
     */
    public $provider;

    /**
     * Shipper tracking number.
     *
     * @var string
     */
    public $trackingNumber;

    /**
     * Tracking url for the parcel delivery.
     *
     * @var string
     */
    public $trackingUrl;


}