<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Enumerated options related to a ContactPoint.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ContactPointOption
 */
class ContactPointOption extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}