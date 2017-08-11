<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for GeoCoordinates
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GeoCoordinates
 */
class GeoCoordinates extends StructuredValue {
	/**
	* @var PostalAddress|string Physical address of the item.
	*/
	public $address;

	/**
	* @var Country|string The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	*/
	public $addressCountry;

	/**
	* @var integer|string The elevation of a location (WGS 84).
	*/
	public $elevation;

	/**
	* @var integer|string The latitude of a location. For example 37.42242 (WGS 84).
	*/
	public $latitude;

	/**
	* @var integer|string The longitude of a location. For example -122.08585 (WGS 84).
	*/
	public $longitude;

	/**
	* @var string The postal code. For example, 94043.
	*/
	public $postalCode;

}