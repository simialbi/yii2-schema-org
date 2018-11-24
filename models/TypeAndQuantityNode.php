<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A structured value indicating the quantity, unit of measurement, and business
 * function of goods included in a bundle offer.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TypeAndQuantityNode
 */
class TypeAndQuantityNode extends StructuredValue {
    /**
     * The quantity of the goods included in the offer.
     *
     * @var integer
     */
    public $amountOfThisGood;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     *
     * @var BusinessFunction
     */
    public $businessFunction;

    /**
     * The product that this structured value is referring to.
     *
     * @var Product|Service
     */
    public $typeOfGood;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or
     * a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix
     * followed by a colon.
     *
     * @var string
     */
    public $unitCode;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * unitCode.
     *
     * @var string
     */
    public $unitText;


}