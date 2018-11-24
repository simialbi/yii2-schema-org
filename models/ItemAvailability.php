<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A list of possible product availability options.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ItemAvailability
 */
class ItemAvailability extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}