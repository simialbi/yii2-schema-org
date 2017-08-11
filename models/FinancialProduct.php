<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for FinancialProduct
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/FinancialProduct
 */
class FinancialProduct extends Service {
	/**
	* @var integer|QuantitativeValue The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.
	*/
	public $annualPercentageRate;

	/**
	* @var string Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
	*/
	public $feesAndCommissionsSpecification;

	/**
	* @var integer|QuantitativeValue The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
	*/
	public $interestRate;

}