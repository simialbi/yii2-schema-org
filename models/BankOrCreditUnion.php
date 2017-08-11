<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for BankOrCreditUnion
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BankOrCreditUnion
 */
class BankOrCreditUnion extends FinancialService {
	/**
	* @var string Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
	*/
	public $feesAndCommissionsSpecification;

}