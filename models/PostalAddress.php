<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The mailing address.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PostalAddress
 */
class PostalAddress extends ContactPoint {
    /**
     * The country. For example, USA. You can also provide the two-letter ISO 3166-1
     * alpha-2 country code.
     *
     * @var Country|string
     */
    public $addressCountry;

    /**
     * The locality. For example, Mountain View.
     *
     * @var string
     */
    public $addressLocality;

    /**
     * The region. For example, CA.
     *
     * @var string
     */
    public $addressRegion;

    /**
     * The post office box number for PO box addresses.
     *
     * @var string
     */
    public $postOfficeBoxNumber;

    /**
     * The postal code. For example, 94043.
     *
     * @var string
     */
    public $postalCode;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @var string
     */
    public $streetAddress;

}