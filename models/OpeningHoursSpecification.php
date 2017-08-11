<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for OpeningHoursSpecification
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OpeningHoursSpecification
 */
class OpeningHoursSpecification extends StructuredValue {
	/**
	* @var string The closing hour of the place or service on the given day(s) of the week.
	*/
	public $closes;

	/**
	* @var DayOfWeek The day of the week for which these opening hours are valid.
	*/
	public $dayOfWeek;

	/**
	* @var string The opening hour of the place or service on the given day(s) of the week.
	*/
	public $opens;

	/**
	* @var string The date when the item becomes valid.
	*/
	public $validFrom;

	/**
	* @var string The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	*/
	public $validThrough;

}