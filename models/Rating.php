<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Rating
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Rating
 */
class Rating extends Intangible {
	/**
	* @var Organization|Person The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
	*/
	public $author;

	/**
	* @var integer|string The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
	*/
	public $bestRating;

	/**
	* @var integer|string The rating for the content.
	*/
	public $ratingValue;

	/**
	* @var integer|string The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
	*/
	public $worstRating;

}