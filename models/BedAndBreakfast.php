<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for BedAndBreakfast
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BedAndBreakfast
 */
class BedAndBreakfast extends LodgingBusiness {
	/**
	* @var LocationFeatureSpecification An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
	*/
	public $amenityFeature;

	/**
	* @var Audience An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	*/
	public $audience;

	/**
	* @var Language|string A language someone may use with or at the item, service or place. Please use one of the language codes from the IETF BCP 47 standard. See also inLanguage
	*/
	public $availableLanguage;

	/**
	* @var string The earliest someone may check into a lodging establishment.
	*/
	public $checkinTime;

	/**
	* @var string The latest someone may check out of a lodging establishment.
	*/
	public $checkoutTime;

	/**
	* @var boolean|string Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
	*/
	public $petsAllowed;

	/**
	* @var Rating An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
	*/
	public $starRating;

}