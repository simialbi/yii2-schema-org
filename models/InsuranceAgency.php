<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An Insurance agency.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InsuranceAgency
 */
class InsuranceAgency extends FinancialService {
    /**
     * Description of fees, commissions, and other terms applied either to a class of
     * financial product, or by a financial service organization.
     *
     * @var string
     */
    public $feesAndCommissionsSpecification;


}