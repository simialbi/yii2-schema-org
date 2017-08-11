<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Suite
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Suite
 */
class Suite extends Accommodation {
	/**
	* @var BedDetails|string The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
      If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
	*/
	public $bed;

	/**
	* @var integer|QuantitativeValue The number of rooms (excluding bathrooms and closets) of the acccommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
	*/
	public $numberOfRooms;

	/**
	* @var QuantitativeValue The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
Typical unit code(s): C62 for person
	*/
	public $occupancy;

}