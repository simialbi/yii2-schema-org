<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A payment method is a standardized procedure for transferring the monetary
 * amount for a purchase. Payment methods are characterized by the legal and
 * technical structures used, and by the organization or group carrying out the
 * transaction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PaymentMethod
 */
class PaymentMethod extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}