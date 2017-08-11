<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for DeliveryChargeSpecification
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DeliveryChargeSpecification
 */
class DeliveryChargeSpecification extends PriceSpecification {
	/**
	* @var DeliveryMethod The delivery method(s) to which the delivery charge or payment charge specification applies.
	*/
	public $appliesToDeliveryMethod;

	/**
	* @var AdministrativeArea|GeoShape|Place|string The geographic area where a service or offered item is provided. Supersedes serviceArea.
	*/
	public $areaServed;

	/**
	* @var GeoShape|Place|string The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.

See also ineligibleRegion.
	*/
	public $eligibleRegion;

	/**
	* @var GeoShape|Place|string The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.

See also eligibleRegion.
	*/
	public $ineligibleRegion;

}