<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for LocationFeatureSpecification
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LocationFeatureSpecification
 */
class LocationFeatureSpecification extends PropertyValue {
	/**
	* @var OpeningHoursSpecification The hours during which this service or contact is available.
	*/
	public $hoursAvailable;

	/**
	* @var string The date when the item becomes valid.
	*/
	public $validFrom;

	/**
	* @var string The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	*/
	public $validThrough;

}