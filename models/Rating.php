<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Rating
 */
class Rating extends Intangible {
    /**
     * The author of this content or rating. Please note that author is special in that
     * HTML 5 provides a special mechanism for indicating authorship via the rel tag.
     * That is equivalent to this and may be used interchangeably.
     *
     * @var Organization|Person
     */
    public $author;

    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is
     * assumed.
     *
     * @var integer|string
     */
    public $bestRating;

    /**
     * The rating for the content.
     *
     * @var integer|string
     */
    public $ratingValue;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     * @var string
     */
    public $reviewAspect;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is
     * assumed.
     *
     * @var integer|string
     */
    public $worstRating;

}