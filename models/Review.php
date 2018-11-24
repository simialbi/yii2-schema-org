<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A review of an item - for example, of a restaurant, movie, or store.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Review
 */
class Review extends CreativeWork {
    /**
     * The item that is being reviewed/rated.
     *
     * @var Thing
     */
    public $itemReviewed;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     * @var string
     */
    public $reviewAspect;

    /**
     * The actual body of the review.
     *
     * @var string
     */
    public $reviewBody;

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The
     * reviewRating applies to rating given by the review. The aggregateRating property
     * applies to the review itself, as a creative work.
     *
     * @var Rating
     */
    public $reviewRating;

}