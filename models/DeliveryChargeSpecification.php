<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The price for the delivery of an offer using a particular delivery method.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DeliveryChargeSpecification
 */
class DeliveryChargeSpecification extends PriceSpecification {
    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     *
     * @var DeliveryMethod
     */
    public $appliesToDeliveryMethod;

    /**
     * The geographic area where a service or offered item is provided. Supersedes
     * serviceArea.
     *
     * @var AdministrativeArea|GeoShape|Place|string
     */
    public $areaServed;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is valid.
     * 
     * See also ineligibleRegion.
     *
     * @var GeoShape|Place|string
     */
    public $eligibleRegion;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is not valid, e.g. a region where the transaction is not allowed.
     * 
     * See also eligibleRegion.
     *
     * @var GeoShape|Place|string
     */
    public $ineligibleRegion;

}