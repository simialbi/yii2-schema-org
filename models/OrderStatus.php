<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Enumerated status values for Order.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OrderStatus
 */
class OrderStatus extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}