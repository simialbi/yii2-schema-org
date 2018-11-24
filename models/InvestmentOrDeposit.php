<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A type of financial product that typically requires the client to transfer funds
 * to a financial service in return for potential beneficial financial return.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InvestmentOrDeposit
 */
class InvestmentOrDeposit extends FinancialProduct {
    /**
     * The amount of money.
     *
     * @var MonetaryAmount|integer
     */
    public $amount;


}