<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * When a single product is associated with multiple offers (for example, the same
 * pair of shoes is offered by different merchants), then AggregateOffer can be
 * used.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AggregateOffer
 */
class AggregateOffer extends Offer {
    /**
     * The highest price of all offers available.
     *
     * @var integer|string
     */
    public $highPrice;

    /**
     * The lowest price of all offers available.
     *
     * @var integer|string
     */
    public $lowPrice;

    /**
     * The number of offers for the product.
     *
     * @var integer
     */
    public $offerCount;

    /**
     * An offer to provide this item—for example, an offer to sell a product, rent
     * the DVD of a movie, perform a service, or give away tickets to an event.
     *
     * @var Offer
     */
    public $offers;

}