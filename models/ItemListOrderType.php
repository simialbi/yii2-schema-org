<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Enumerated for values for itemListOrder for indicating how an ordered ItemList
 * is organized.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ItemListOrderType
 */
class ItemListOrderType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}