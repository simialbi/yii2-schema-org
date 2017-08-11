<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Dataset
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Dataset
 */
class Dataset extends CreativeWork {
	/**
	* @var DataDownload A downloadable form of this dataset, at a specific location, in a specific format.
	*/
	public $distribution;

	/**
	* @var DataCatalog A data catalog which contains this dataset. Supersedes catalog, includedDataCatalog. Inverse property: dataset.
	*/
	public $includedInDataCatalog;

}