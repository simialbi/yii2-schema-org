<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Ticket
 */
class Ticket extends Intangible {
    /**
     * The date the ticket was issued.
     *
     * @var string
     */
    public $dateIssued;

    /**
     * The organization issuing the ticket or permit.
     *
     * @var Organization
     */
    public $issuedBy;

    /**
     * The currency of the price, or a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * Use standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol for
     * cryptocurrencies e.g. "BTC"; well known names for Local Exchange Tradings
     * Systems (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     * @var string
     */
    public $priceCurrency;

    /**
     * The unique identifier for the ticket.
     *
     * @var string
     */
    public $ticketNumber;

    /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     *
     * @var string
     */
    public $ticketToken;

    /**
     * The seat associated with the ticket.
     *
     * @var Seat
     */
    public $ticketedSeat;

    /**
     * The total price for the reservation or ticket, including applicable taxes,
     * shipping, etc.
     *
     * @var integer|PriceSpecification|string
     */
    public $totalPrice;

    /**
     * The person or organization the reservation or ticket is for.
     *
     * @var Organization|Person
     */
    public $underName;

}