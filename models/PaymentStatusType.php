<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PaymentStatusType
 */
class PaymentStatusType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}