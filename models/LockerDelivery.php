<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A DeliveryMethod in which an item is made available via locker.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LockerDelivery
 */
class LockerDelivery extends DeliveryMethod {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}