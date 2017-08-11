<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Map
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Map
 */
class Map extends CreativeWork {
	/**
	* @var MapCategoryType Indicates the kind of Map, from the MapCategoryType Enumeration.
	*/
	public $mapType;

}