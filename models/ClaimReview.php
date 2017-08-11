<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ClaimReview
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ClaimReview
 */
class ClaimReview extends Review {
	/**
	* @var string A short summary of the specific claims reviewed in a ClaimReview.
	*/
	public $claimReviewed;

}