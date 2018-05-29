<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PaymentCard
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PaymentCard
 */
class PaymentCard extends PaymentMethod {
	/**
	* @var boolean|integer A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
	*/
	public $cashBack;

	/**
	* @var boolean A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
	*/
	public $contactlessPayment;

	/**
	* @var MonetaryAmount A floor limit is the amount of money above which credit card transactions must be authorized.
	*/
	public $floorLimit;

}