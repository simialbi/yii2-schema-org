<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Order
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Order
 */
class Order extends Intangible {
	/**
	* @var Offer The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
	*/
	public $acceptedOffer;

	/**
	* @var PostalAddress The billing address for the order.
	*/
	public $billingAddress;

	/**
	* @var Organization|Person An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred. Supersedes bookingAgent.
	*/
	public $broker;

	/**
	* @var string A number that confirms the given order or payment has been received.
	*/
	public $confirmationNumber;

	/**
	* @var Organization|Person Party placing the order or paying the invoice.
	*/
	public $customer;

	/**
	* @var integer|string Any discount applied (to an Order).
	*/
	public $discount;

	/**
	* @var string Code used to redeem a discount.
	*/
	public $discountCode;

	/**
	* @var string The currency (in 3-letter ISO 4217 format) of the discount.
	*/
	public $discountCurrency;

	/**
	* @var boolean Was the offer accepted as a gift for someone other than the buyer.
	*/
	public $isGift;

	/**
	* @var string Date order was placed.
	*/
	public $orderDate;

	/**
	* @var ParcelDelivery The delivery of the parcel related to this order or order item.
	*/
	public $orderDelivery;

	/**
	* @var string The identifier of the transaction.
	*/
	public $orderNumber;

	/**
	* @var OrderStatus The current status of the order.
	*/
	public $orderStatus;

	/**
	* @var OrderItem|Product The item ordered.
	*/
	public $orderedItem;

	/**
	* @var Invoice The order is being paid as part of the referenced Invoice.
	*/
	public $partOfInvoice;

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
	* @var string The URL for sending a payment.
	*/
	public $paymentUrl;

	/**
	* @var Organization|Person An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider. Supersedes merchant, vendor.
	*/
	public $seller;

}