<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by the
 * customer.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Order
 */
class Order extends Intangible {
    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in
     * the order.
     *
     * @var Offer
     */
    public $acceptedOffer;

    /**
     * The billing address for the order.
     *
     * @var PostalAddress
     */
    public $billingAddress;

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
     * Any discount applied (to an Order).
     *
     * @var integer|string
     */
    public $discount;

    /**
     * Code used to redeem a discount.
     *
     * @var string
     */
    public $discountCode;

    /**
     * The currency of the discount.
     * 
     * Use standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol for
     * cryptocurrencies e.g. "BTC"; well known names for Local Exchange Tradings
     * Systems (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     * @var string
     */
    public $discountCurrency;

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     * @var boolean
     */
    public $isGift;

    /**
     * Date order was placed.
     *
     * @var string
     */
    public $orderDate;

    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @var ParcelDelivery
     */
    public $orderDelivery;

    /**
     * The identifier of the transaction.
     *
     * @var string
     */
    public $orderNumber;

    /**
     * The current status of the order.
     *
     * @var OrderStatus
     */
    public $orderStatus;

    /**
     * The item ordered.
     *
     * @var OrderItem|Product
     */
    public $orderedItem;

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     * @var Invoice
     */
    public $partOfInvoice;

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
     * The URL for sending a payment.
     *
     * @var string
     */
    public $paymentUrl;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A
     * seller may also be a provider. Supersedes merchant, vendor.
     *
     * @var Organization|Person
     */
    public $seller;

}