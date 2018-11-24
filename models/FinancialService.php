<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Financial services business.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/FinancialService
 */
class FinancialService extends LocalBusiness {
    /**
     * Description of fees, commissions, and other terms applied either to a class of
     * financial product, or by a financial service organization.
     *
     * @var string
     */
    public $feesAndCommissionsSpecification;

}