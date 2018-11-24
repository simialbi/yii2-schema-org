<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * ATM/cash machine.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AutomatedTeller
 */
class AutomatedTeller extends FinancialService {
    /**
     * Description of fees, commissions, and other terms applied either to a class of
     * financial product, or by a financial service organization.
     *
     * @var string
     */
    public $feesAndCommissionsSpecification;


}