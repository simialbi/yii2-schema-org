<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A tourist attraction.  In principle any Thing can be a TouristAttraction, from a
 * Mountain and LandmarksOrHistoricalBuildings to a LocalBusiness.  This Type can
 * be used on its own to describe a general TouristAttraction, or be used as an
 * additionalType to add tourist attraction properties to any other type.  (See
 * examples below)
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TouristAttraction
 */
class TouristAttraction extends Place {
    /**
     * A language someone may use with or at the item, service or place. Please use one
     * of the language codes from the IETF BCP 47 standard. See also inLanguage
     *
     * @var Language|string
     */
    public $availableLanguage;

    /**
     * Attraction suitable for type(s) of tourist. eg. Children, visitors from a
     * particular country, etc.
     *
     * @var Audience|string
     */
    public $touristType;

}