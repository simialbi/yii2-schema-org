<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A diet restricted to certain foods or preparations for cultural, religious,
 * health or lifestyle reasons.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RestrictedDiet
 */
class RestrictedDiet extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}