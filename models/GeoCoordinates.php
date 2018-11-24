<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The geographic coordinates of a place or event.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GeoCoordinates
 */
class GeoCoordinates extends StructuredValue {
    /**
     * Physical address of the item.
     *
     * @var PostalAddress|string
     */
    public $address;

    /**
     * The country. For example, USA. You can also provide the two-letter ISO 3166-1
     * alpha-2 country code.
     *
     * @var Country|string
     */
    public $addressCountry;

    /**
     * The elevation of a location (WGS 84).
     *
     * @var integer|string
     */
    public $elevation;

    /**
     * The latitude of a location. For example 37.42242 (WGS 84).
     *
     * @var integer|string
     */
    public $latitude;

    /**
     * The longitude of a location. For example -122.08585 (WGS 84).
     *
     * @var integer|string
     */
    public $longitude;

    /**
     * The postal code. For example, 94043.
     *
     * @var string
     */
    public $postalCode;


}