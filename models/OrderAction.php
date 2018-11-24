<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An agent orders an object/product/service to be delivered/sent.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OrderAction
 */
class OrderAction extends TradeAction {
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @var DeliveryMethod
     */
    public $deliveryMethod;

}