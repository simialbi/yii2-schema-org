<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for AggregateRating
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AggregateRating
 */
class AggregateRating extends Rating {
	/**
	* @var Thing The item that is being reviewed/rated.
	*/
	public $itemReviewed;

	/**
	* @var integer The count of total number of ratings.
	*/
	public $ratingCount;

	/**
	* @var integer The count of total number of reviews.
	*/
	public $reviewCount;

}