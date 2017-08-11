<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Brand
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Brand
 */
class Brand extends Intangible {
	/**
	* @var AggregateRating The overall rating, based on a collection of reviews or ratings, of the item.
	*/
	public $aggregateRating;

	/**
	* @var ImageObject|string An associated logo.
	*/
	public $logo;

	/**
	* @var Review A review of the item. Supersedes reviews.
	*/
	public $review;

}