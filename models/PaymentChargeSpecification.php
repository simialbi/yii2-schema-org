<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The costs of settling the payment using a particular payment method.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PaymentChargeSpecification
 */
class PaymentChargeSpecification extends PriceSpecification {
    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     *
     * @var DeliveryMethod
     */
    public $appliesToDeliveryMethod;

    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     * @var PaymentMethod
     */
    public $appliesToPaymentMethod;


}