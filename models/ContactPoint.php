<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ContactPoint
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ContactPoint
 */
class ContactPoint extends StructuredValue {
	/**
	* @var AdministrativeArea|GeoShape|Place|string The geographic area where a service or offered item is provided. Supersedes serviceArea.
	*/
	public $areaServed;

	/**
	* @var Language|string A language someone may use with or at the item, service or place. Please use one of the language codes from the IETF BCP 47 standard. See also inLanguage
	*/
	public $availableLanguage;

	/**
	* @var ContactPointOption An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
	*/
	public $contactOption;

	/**
	* @var string A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
	*/
	public $contactType;

	/**
	* @var string Email address.
	*/
	public $email;

	/**
	* @var string The fax number.
	*/
	public $faxNumber;

	/**
	* @var OpeningHoursSpecification The hours during which this service or contact is available.
	*/
	public $hoursAvailable;

	/**
	* @var Product|string The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
	*/
	public $productSupported;

	/**
	* @var string The telephone number.
	*/
	public $telephone;

}