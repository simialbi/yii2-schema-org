<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A product or service offered by a bank whereby one may deposit, withdraw or
 * transfer money and in some cases be paid interest.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BankAccount
 */
class BankAccount extends FinancialProduct {
    /**
     * A minimum amount that has to be paid in every month.
     *
     * @var MonetaryAmount
     */
    public $accountMinimumInflow;

    /**
     * An overdraft is an extension of credit from a lending institution when an
     * account reaches zero. An overdraft allows the individual to continue withdrawing
     * money even if the account has no funds in it. Basically the bank allows people
     * to borrow a set amount of money.
     *
     * @var MonetaryAmount
     */
    public $accountOverdraftLimit;

    /**
     * The type of a bank account.
     *
     * @var string
     */
    public $bankAccountType;


}