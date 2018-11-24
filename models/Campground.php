<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A camping site, campsite, or campground is a place used for overnight stay in
 * the outdoors. In British English a campsite is an area, usually divided into a
 * number of pitches, where people can camp overnight using tents or camper vans or
 * caravans; this British English use of the word is synonymous with the American
 * English expression campground. In American English the term campsite generally
 * means an area where an individual, family, group, or military unit can pitch a
 * tent or parks a camper; a campground may contain many campsites (Source:
 * Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Campsite).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Campground
 */
class Campground extends LodgingBusiness {
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