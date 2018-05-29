<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for DepositAccount
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DepositAccount
 */
class DepositAccount extends BankAccount {
	/**
	* @var MonetaryAmount|integer The amount of money.
	*/
	public $amount;

}