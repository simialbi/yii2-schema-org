<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An event involving the delivery of an item.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DeliveryEvent
 */
class DeliveryEvent extends Event {
    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     *
     * @var string
     */
    public $accessCode;

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     * @var string
     */
    public $availableFrom;

    /**
     * After this date, the item will no longer be available for pickup.
     *
     * @var string
     */
    public $availableThrough;

    /**
     * Method used for delivery or shipping.
     *
     * @var DeliveryMethod
     */
    public $hasDeliveryMethod;


}