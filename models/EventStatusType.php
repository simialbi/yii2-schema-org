<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * EventStatusType is an enumeration type whose instances represent several states
 * that an Event may be in.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EventStatusType
 */
class EventStatusType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}