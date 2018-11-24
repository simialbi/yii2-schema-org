<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A set of characteristics belonging to businesses, e.g. who compose an item's
 * target audience.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BusinessAudience
 */
class BusinessAudience extends Audience {
    /**
     * The number of employees in an organization e.g. business.
     *
     * @var QuantitativeValue
     */
    public $numberOfEmployees;

    /**
     * The size of the business in annual revenue.
     *
     * @var QuantitativeValue
     */
    public $yearlyRevenue;

    /**
     * The age of the business.
     *
     * @var QuantitativeValue
     */
    public $yearsInOperation;


}