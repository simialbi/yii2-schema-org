<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A brand is a name used by an organization or business person for labeling a
 * product, product group, or similar.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Brand
 */
class Brand extends Intangible {
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    public $aggregateRating;

    /**
     * An associated logo.
     *
     * @var ImageObject|string
     */
    public $logo;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     */
    public $review;


}