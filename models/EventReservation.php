<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A reservation for an event like a concert, sporting event, or lecture.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EventReservation
 */
class EventReservation extends Reservation {
    /**
     * The date and time the reservation was booked.
     *
     * @var string
     */
    public $bookingTime;

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
     * The date and time the reservation was modified.
     *
     * @var string
     */
    public $modifiedTime;

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
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to
     * the reservation.
     *
     * @var ProgramMembership
     */
    public $programMembershipUsed;

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on behalf
     * of the provider. A provider may also serve as the seller. Supersedes carrier.
     *
     * @var Organization|Person
     */
    public $provider;

    /**
     * The thing -- flight, event, restaurant,etc. being reserved.
     *
     * @var Thing
     */
    public $reservationFor;

    /**
     * A unique identifier for the reservation.
     *
     * @var string
     */
    public $reservationId;

    /**
     * The current status of the reservation.
     *
     * @var ReservationStatusType
     */
    public $reservationStatus;

    /**
     * A ticket associated with the reservation.
     *
     * @var Ticket
     */
    public $reservedTicket;

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