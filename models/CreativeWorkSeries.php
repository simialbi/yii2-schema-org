<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for CreativeWorkSeries
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CreativeWorkSeries
 */
class CreativeWorkSeries extends CreativeWork {
	/**
	* @var string The end date and time of the item (in ISO 8601 date format).
	*/
	public $endDate;

	/**
	* @var string The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
	*/
	public $issn;

	/**
	* @var string The start date and time of the item (in ISO 8601 date format).
	*/
	public $startDate;

}