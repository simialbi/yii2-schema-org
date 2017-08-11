<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for BarOrPub
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BarOrPub
 */
class BarOrPub extends FoodEstablishment {
	/**
	* @var boolean|string Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards compatibility) the strings Yes or No.
	*/
	public $acceptsReservations;

	/**
	* @var Menu|string Either the actual menu as a structured representation, as text, or a URL of the menu. Supersedes menu.
	*/
	public $hasMenu;

	/**
	* @var string The cuisine of the restaurant.
	*/
	public $servesCuisine;

	/**
	* @var Rating An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
	*/
	public $starRating;

}