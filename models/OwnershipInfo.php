<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A structured value providing information about when a certain organization or
 * person owned a certain product.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OwnershipInfo
 */
class OwnershipInfo extends StructuredValue {
    /**
     * The organization or person from which the product was acquired.
     *
     * @var Organization|Person
     */
    public $acquiredFrom;

    /**
     * The date and time of obtaining the product.
     *
     * @var string
     */
    public $ownedFrom;

    /**
     * The date and time of giving up ownership on the product.
     *
     * @var string
     */
    public $ownedThrough;

    /**
     * The product that this structured value is referring to.
     *
     * @var Product|Service
     */
    public $typeOfGood;


}