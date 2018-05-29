<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Accommodation
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Accommodation
 */
class Accommodation extends Place {
	/**
	* @var LocationFeatureSpecification An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
	*/
	public $amenityFeature;

	/**
	* @var QuantitativeValue The size of the accommodation, e.g. in square meter or squarefoot.
	* Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard
	*/
	public $floorSize;

	/**
	* @var integer|QuantitativeValue The number of rooms (excluding bathrooms and closets) of the acccommodation or lodging business.
	* Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
	*/
	public $numberOfRooms;

	/**
	* @var string Indications regarding the permitted usage of the accommodation.
	*/
	public $permittedUsage;

	/**
	* @var boolean|string Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
	*/
	public $petsAllowed;

}