<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A single, identifiable product instance (e.g. a laptop with a particular serial
 * number).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/IndividualProduct
 */
class IndividualProduct extends Product {
    /**
     * The serial number or any alphanumeric identifier of a particular product. When
     * attached to an offer, it is a shortcut for the serial number of the product
     * included in the offer.
     *
     * @var string
     */
    public $serialNumber;

}