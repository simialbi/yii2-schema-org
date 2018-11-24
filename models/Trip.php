<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A trip or journey. An itinerary of visits to one or more places.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Trip
 */
class Trip extends Intangible {
    /**
     * The expected arrival time.
     *
     * @var string
     */
    public $arrivalTime;

    /**
     * The expected departure time.
     *
     * @var string
     */
    public $departureTime;

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in
     * some sense). Inverse property: isPartOf.
     *
     * @var CreativeWork|Trip
     */
    public $hasPart;

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some
     * sense), is part of. Inverse property: hasPart.
     *
     * @var CreativeWork|Trip
     */
    public $isPartOf;

    /**
     * Destination(s) ( Place ) that make up a trip. For a trip where destination order
     * is important use ItemList to specify that order (see examples).
     *
     * @var ItemList|Place
     */
    public $itinerary;

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

}