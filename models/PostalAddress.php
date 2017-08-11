<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PostalAddress
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PostalAddress
 */
class PostalAddress extends ContactPoint {
	/**
	* @var Country|string The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	*/
	public $addressCountry;

	/**
	* @var string The locality. For example, Mountain View.
	*/
	public $addressLocality;

	/**
	* @var string The region. For example, CA.
	*/
	public $addressRegion;

	/**
	* @var string The post office box number for PO box addresses.
	*/
	public $postOfficeBoxNumber;

	/**
	* @var string The postal code. For example, 94043.
	*/
	public $postalCode;

	/**
	* @var string The street address. For example, 1600 Amphitheatre Pkwy.
	*/
	public $streetAddress;

}