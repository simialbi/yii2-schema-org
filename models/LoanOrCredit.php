<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A financial product for the loaning of an amount of money under agreed terms and
 * charges.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LoanOrCredit
 */
class LoanOrCredit extends FinancialProduct {
    /**
     * The amount of money.
     *
     * @var MonetaryAmount|integer
     */
    public $amount;

    /**
     * The currency in which the monetary amount is expressed.
     * 
     * Use standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol for
     * cryptocurrencies e.g. "BTC"; well known names for Local Exchange Tradings
     * Systems (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     * @var string
     */
    public $currency;

    /**
     * The period of time after any due date that the borrower has to fulfil its
     * obligations before a default (failure to pay) is deemed to have occurred.
     *
     * @var Duration
     */
    public $gracePeriod;

    /**
     * A form of paying back money previously borrowed from a lender. Repayment usually
     * takes the form of periodic payments that normally include part principal plus
     * interest in each payment.
     *
     * @var RepaymentSpecification
     */
    public $loanRepaymentForm;

    /**
     * The duration of the loan or credit agreement.
     *
     * @var QuantitativeValue
     */
    public $loanTerm;

    /**
     * The type of a loan or credit.
     *
     * @var string
     */
    public $loanType;

    /**
     * The only way you get the money back in the event of default is the security.
     * Recourse is where you still have the opportunity to go back to the borrower for
     * the rest of the money.
     *
     * @var boolean
     */
    public $recourseLoan;

    /**
     * Whether the terms for payment of interest can be renegotiated during the life of
     * the loan.
     *
     * @var boolean
     */
    public $renegotiableLoan;

    /**
     * Assets required to secure loan or credit repayments. It may take form of third
     * party pledge, goods, financial instruments (cash, securities, etc.)
     *
     * @var string|Thing
     */
    public $requiredCollateral;

}