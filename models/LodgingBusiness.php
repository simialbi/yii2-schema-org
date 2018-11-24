<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A lodging business, such as a motel, hotel, or inn.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LodgingBusiness
 */
class LodgingBusiness extends LocalBusiness {
    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This
     * generic property does not make a statement about whether the feature is included
     * in an offer for the main accommodation or available at extra costs.
     *
     * @var LocationFeatureSpecification
     */
    public $amenityFeature;

    /**
     * An intended audience, i.e. a group for whom something was created. Supersedes
     * serviceAudience.
     *
     * @var Audience
     */
    public $audience;

    /**
     * A language someone may use with or at the item, service or place. Please use one
     * of the language codes from the IETF BCP 47 standard. See also inLanguage
     *
     * @var Language|string
     */
    public $availableLanguage;

    /**
     * The earliest someone may check into a lodging establishment.
     *
     * @var string
     */
    public $checkinTime;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @var string
     */
    public $checkoutTime;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @var boolean|string
     */
    public $petsAllowed;

    /**
     * An official rating for a lodging business or food establishment, e.g. from
     * national associations or standards bodies. Use the author property to indicate
     * the rating organization, e.g. as an Organization with name such as (e.g. HOTREC,
     * DEHOGA, WHR, or Hotelstars).
     *
     * @var Rating
     */
    public $starRating;


}