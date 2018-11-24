<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An ice cream shop.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/IceCreamShop
 */
class IceCreamShop extends FoodEstablishment {
    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be
     * Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings Yes or No.
     *
     * @var boolean|string
     */
    public $acceptsReservations;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the
     * menu. Supersedes menu.
     *
     * @var Menu|string
     */
    public $hasMenu;

    /**
     * The cuisine of the restaurant.
     *
     * @var string
     */
    public $servesCuisine;

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