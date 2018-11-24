<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A map.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Map
 */
class Map extends CreativeWork {
    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     *
     * @var MapCategoryType
     */
    public $mapType;


}