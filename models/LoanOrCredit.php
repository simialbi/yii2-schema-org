<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for LoanOrCredit
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LoanOrCredit
 */
class LoanOrCredit extends FinancialProduct {
	/**
	* @var MonetaryAmount|integer The amount of money.
	*/
	public $amount;

	/**
	* @var string The currency in which the monetary amount is expressed (in 3-letter ISO 4217 format).
	*/
	public $currency;

	/**
	* @var Duration The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to pay) is deemed to have occurred.
	*/
	public $gracePeriod;

	/**
	* @var RepaymentSpecification A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally include part principal plus interest in each payment.
	*/
	public $loanRepaymentForm;

	/**
	* @var QuantitativeValue The duration of the loan or credit agreement.
	*/
	public $loanTerm;

	/**
	* @var string The type of a loan or credit.
	*/
	public $loanType;

	/**
	* @var boolean The only way you get the money back in the event of default is the security. Recourse is where you still have the opportunity to go back to the borrower for the rest of the money.
	*/
	public $recourseLoan;

	/**
	* @var boolean Whether the terms for payment of interest can be renegotiated during the life of the loan.
	*/
	public $renegotiableLoan;

	/**
	* @var string|Thing Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
	*/
	public $requiredCollateral;

}