<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Ticket
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Ticket
 */
class Ticket extends Intangible {
	/**
	* @var string The date the ticket was issued.
	*/
	public $dateIssued;

	/**
	* @var Organization The organization issuing the ticket or permit.
	*/
	public $issuedBy;

	/**
	* @var string The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
	*/
	public $priceCurrency;

	/**
	* @var string The unique identifier for the ticket.
	*/
	public $ticketNumber;

	/**
	* @var string Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
	*/
	public $ticketToken;

	/**
	* @var Seat The seat associated with the ticket.
	*/
	public $ticketedSeat;

	/**
	* @var integer|PriceSpecification|string The total price for the reservation or ticket, including applicable taxes, shipping, etc.
	*/
	public $totalPrice;

	/**
	* @var Organization|Person The person or organization the reservation or ticket is for.
	*/
	public $underName;

}