<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A service which provides access to media programming like TV or radio. Access
 * may be via cable or satellite.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CableOrSatelliteService
 */
class CableOrSatelliteService extends Service {
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    public $aggregateRating;

    /**
     * The geographic area where a service or offered item is provided. Supersedes
     * serviceArea.
     *
     * @var AdministrativeArea|GeoShape|Place|string
     */
    public $areaServed;

    /**
     * An intended audience, i.e. a group for whom something was created. Supersedes
     * serviceAudience.
     *
     * @var Audience
     */
    public $audience;

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location,
     * etc.).
     *
     * @var ServiceChannel
     */
    public $availableChannel;

    /**
     * An award won by or for this item. Supersedes awards.
     *
     * @var string
     */
    public $award;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by
     * an organization or business person.
     *
     * @var Brand|Organization
     */
    public $brand;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most
     * cases a broker never acquires or releases ownership of a product or service
     * involved in an exchange.  If it is not clear whether an entity is a broker,
     * seller, or buyer, the latter two terms are preferred. Supersedes bookingAgent.
     *
     * @var Organization|Person
     */
    public $broker;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @var PhysicalActivityCategory|string|Thing
     */
    public $category;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     * @var OfferCatalog
     */
    public $hasOfferCatalog;

    /**
     * The hours during which this service or contact is available.
     *
     * @var OpeningHoursSpecification
     */
    public $hoursAvailable;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Product|Service
     */
    public $isRelatedTo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Product|Service
     */
    public $isSimilarTo;

    /**
     * An associated logo.
     *
     * @var ImageObject|string
     */
    public $logo;

    /**
     * An offer to provide this item—for example, an offer to sell a product, rent
     * the DVD of a movie, perform a service, or give away tickets to an event.
     *
     * @var Offer
     */
    public $offers;

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on behalf
     * of the provider. A provider may also serve as the seller. Supersedes carrier.
     *
     * @var Organization|Person
     */
    public $provider;

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     *
     * @var string
     */
    public $providerMobility;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     */
    public $review;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     * Supersedes produces.
     *
     * @var Thing
     */
    public $serviceOutput;

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief,
     * etc.
     *
     * @var string
     */
    public $serviceType;

    /**
     * Human-readable terms of service documentation.
     *
     * @var string
     */
    public $termsOfService;

}