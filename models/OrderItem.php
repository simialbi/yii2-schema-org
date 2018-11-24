<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OrderItem
 */
class OrderItem extends Intangible {
    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @var ParcelDelivery
     */
    public $orderDelivery;

    /**
     * The identifier of the order item.
     *
     * @var string
     */
    public $orderItemNumber;

    /**
     * The current status of the order item.
     *
     * @var OrderStatus
     */
    public $orderItemStatus;

    /**
     * The number of the item ordered. If the property is not set, assume the quantity
     * is one.
     *
     * @var integer
     */
    public $orderQuantity;

    /**
     * The item ordered.
     *
     * @var OrderItem|Product
     */
    public $orderedItem;


}