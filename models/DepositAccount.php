<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A type of Bank Account with a main purpose of depositing funds to gain interest
 * or other benefits.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DepositAccount
 */
class DepositAccount extends BankAccount {
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