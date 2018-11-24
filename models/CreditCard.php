<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A card payment method of a particular brand or name.  Used to mark up a
 * particular payment method and/or the financial product/service that supplies the
 * card account.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CreditCard
 */
class CreditCard extends LoanOrCredit {
    /**
     * The minimum payment is the lowest amount of money that one is required to pay on
     * a credit card statement each month.
     *
     * @var MonetaryAmount|integer
     */
    public $monthlyMinimumRepaymentAmount;


}