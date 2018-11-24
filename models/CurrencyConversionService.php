<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A service to convert funds from one currency to another currency.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CurrencyConversionService
 */
class CurrencyConversionService extends FinancialProduct {
    /**
     * The annual rate that is charged for borrowing (or made by investing), expressed
     * as a single percentage number that represents the actual yearly cost of funds
     * over the term of a loan. This includes any fees or additional costs associated
     * with the transaction.
     *
     * @var integer|QuantitativeValue
     */
    public $annualPercentageRate;

    /**
     * Description of fees, commissions, and other terms applied either to a class of
     * financial product, or by a financial service organization.
     *
     * @var string
     */
    public $feesAndCommissionsSpecification;

    /**
     * The interest rate, charged or paid, applicable to the financial product. Note:
     * This is different from the calculated annualPercentageRate.
     *
     * @var integer|QuantitativeValue
     */
    public $interestRate;


}