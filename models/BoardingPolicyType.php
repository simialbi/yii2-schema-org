<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A type of boarding policy used by an airline.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BoardingPolicyType
 */
class BoardingPolicyType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}