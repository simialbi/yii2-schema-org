<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A business entity type is a conceptual entity representing the legal form, the
 * size, the main line of business, the position in the value chain, or any
 * combination thereof, of an organization or business person.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BusinessEntityType
 */
class BusinessEntityType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}