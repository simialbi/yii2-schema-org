<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for AutomatedTeller
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AutomatedTeller
 */
class AutomatedTeller extends FinancialService {
	/**
	* @var string Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
	*/
	public $feesAndCommissionsSpecification;

}