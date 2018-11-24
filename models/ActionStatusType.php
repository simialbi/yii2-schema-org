<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The status of an Action.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ActionStatusType
 */
class ActionStatusType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}