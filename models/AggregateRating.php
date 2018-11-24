<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The average rating based on multiple ratings or reviews.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AggregateRating
 */
class AggregateRating extends Rating {
    /**
     * The item that is being reviewed/rated.
     *
     * @var Thing
     */
    public $itemReviewed;

    /**
     * The count of total number of ratings.
     *
     * @var integer
     */
    public $ratingCount;

    /**
     * The count of total number of reviews.
     *
     * @var integer
     */
    public $reviewCount;

}