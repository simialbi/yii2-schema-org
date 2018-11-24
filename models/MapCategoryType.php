<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An enumeration of several kinds of Map.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MapCategoryType
 */
class MapCategoryType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}