<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Invoice
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Invoice
 */
class Invoice extends Intangible {
	/**
	* @var string The identifier for the account the payment will be applied to.
	*/
	public $accountId;

	/**
	* @var Duration The time interval used to compute the invoice.
	*/
	public $billingPeriod;

	/**
	* @var Organization|Person An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred. Supersedes bookingAgent.
	*/
	public $broker;

	/**
	* @var string|Thing A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	*/
	public $category;

	/**
	* @var string A number that confirms the given order or payment has been received.
	*/
	public $confirmationNumber;

	/**
	* @var Organization|Person Party placing the order or paying the invoice.
	*/
	public $customer;

	/**
	* @var MonetaryAmount|PriceSpecification The minimum payment required at this time.
	*/
	public $minimumPaymentDue;

	/**
	* @var string The date that payment is due. Supersedes paymentDue.
	*/
	public $paymentDueDate;

	/**
	* @var PaymentMethod The name of the credit card or other method of payment for the order.
	*/
	public $paymentMethod;

	/**
	* @var string An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
	*/
	public $paymentMethodId;

	/**
	* @var PaymentStatusType|string The status of payment; whether the invoice has been paid or not.
	*/
	public $paymentStatus;

	/**
	* @var Organization|Person The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	*/
	public $provider;

	/**
	* @var Order The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
	*/
	public $referencesOrder;

	/**
	* @var string The date the invoice is scheduled to be paid.
	*/
	public $scheduledPaymentDate;

	/**
	* @var MonetaryAmount|PriceSpecification The total amount due.
	*/
	public $totalPaymentDue;

}