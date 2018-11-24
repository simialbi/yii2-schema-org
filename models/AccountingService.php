<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Accountancy business.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AccountingService
 */
class AccountingService extends FinancialService {
    /**
     * Description of fees, commissions, and other terms applied either to a class of
     * financial product, or by a financial service organization.
     *
     * @var string
     */
    public $feesAndCommissionsSpecification;


}