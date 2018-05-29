<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for TouristAttraction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TouristAttraction
 */
class TouristAttraction extends Place {
	/**
	* @var Language|string A language someone may use with or at the item, service or place. Please use one of the language codes from the IETF BCP 47 standard. See also inLanguage
	*/
	public $availableLanguage;

	/**
	* @var Audience|string Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc.
	*/
	public $touristType;

}