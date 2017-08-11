<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for DataCatalog
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DataCatalog
 */
class DataCatalog extends CreativeWork {
	/**
	* @var Dataset A dataset contained in this catalog. Inverse property: includedInDataCatalog.
	*/
	public $dataset;

}