<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for CreditCard
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CreditCard
 */
class CreditCard extends LoanOrCredit {
	/**
	* @var MonetaryAmount|integer The amount of money.
	*/
	public $amount;

	/**
	* @var QuantitativeValue The duration of the loan or credit agreement.
	*/
	public $loanTerm;

	/**
	* @var string|Thing Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
	*/
	public $requiredCollateral;

}