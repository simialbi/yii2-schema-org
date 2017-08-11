<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Comment
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Comment
 */
class Comment extends CreativeWork {
	/**
	* @var integer The number of downvotes this question, answer or comment has received from the community.
	*/
	public $downvoteCount;

	/**
	* @var Question The parent of a question, answer or item in general.
	*/
	public $parentItem;

	/**
	* @var integer The number of upvotes this question, answer or comment has received from the community.
	*/
	public $upvoteCount;

}