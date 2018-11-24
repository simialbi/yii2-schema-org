<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A payment method using a credit, debit, store or other card to associate the
 * payment with an account.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PaymentCard
 */
class PaymentCard extends PaymentMethod {
    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net
     * expenditures.
     *
     * @var boolean|integer
     */
    public $cashBack;

    /**
     * A secure method for consumers to purchase products or services via debit, credit
     * or smartcards by using RFID or NFC technology.
     *
     * @var boolean
     */
    public $contactlessPayment;

    /**
     * A floor limit is the amount of money above which credit card transactions must
     * be authorized.
     *
     * @var MonetaryAmount
     */
    public $floorLimit;

}