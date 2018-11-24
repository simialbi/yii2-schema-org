<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An enumeration of genders.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GenderType
 */
class GenderType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}