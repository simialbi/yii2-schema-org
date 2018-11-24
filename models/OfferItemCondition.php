<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A list of possible conditions for the item.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OfferItemCondition
 */
class OfferItemCondition extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}