<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A statement of the money due for goods or services; a bill.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Invoice
 */
class Invoice extends Intangible {
    /**
     * The identifier for the account the payment will be applied to.
     *
     * @var string
     */
    public $accountId;

    /**
     * The time interval used to compute the invoice.
     *
     * @var Duration
     */
    public $billingPeriod;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most
     * cases a broker never acquires or releases ownership of a product or service
     * involved in an exchange.  If it is not clear whether an entity is a broker,
     * seller, or buyer, the latter two terms are preferred. Supersedes bookingAgent.
     *
     * @var Organization|Person
     */
    public $broker;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @var PhysicalActivityCategory|string|Thing
     */
    public $category;

    /**
     * A number that confirms the given order or payment has been received.
     *
     * @var string
     */
    public $confirmationNumber;

    /**
     * Party placing the order or paying the invoice.
     *
     * @var Organization|Person
     */
    public $customer;

    /**
     * The minimum payment required at this time.
     *
     * @var MonetaryAmount|PriceSpecification
     */
    public $minimumPaymentDue;

    /**
     * The date that payment is due. Supersedes paymentDue.
     *
     * @var string
     */
    public $paymentDueDate;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @var PaymentMethod
     */
    public $paymentMethod;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the
     * credit card).
     *
     * @var string
     */
    public $paymentMethodId;

    /**
     * The status of payment; whether the invoice has been paid or not.
     *
     * @var PaymentStatusType|string
     */
    public $paymentStatus;

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on behalf
     * of the provider. A provider may also serve as the seller. Supersedes carrier.
     *
     * @var Organization|Person
     */
    public $provider;

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a
     * single Invoice.
     *
     * @var Order
     */
    public $referencesOrder;

    /**
     * The date the invoice is scheduled to be paid.
     *
     * @var string
     */
    public $scheduledPaymentDate;

    /**
     * The total amount due.
     *
     * @var MonetaryAmount|PriceSpecification
     */
    public $totalPaymentDue;

}