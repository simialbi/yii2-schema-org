<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for InvestmentOrDeposit
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InvestmentOrDeposit
 */
class InvestmentOrDeposit extends FinancialProduct {
	/**
	* @var MonetaryAmount|integer The amount of money.
	*/
	public $amount;

}