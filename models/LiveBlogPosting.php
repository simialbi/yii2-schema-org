<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for LiveBlogPosting
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LiveBlogPosting
 */
class LiveBlogPosting extends BlogPosting {
	/**
	* @var string The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
	*/
	public $coverageEndTime;

	/**
	* @var string The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time. The LiveBlogPosting may also be created before coverage begins.
	*/
	public $coverageStartTime;

	/**
	* @var BlogPosting An update to the LiveBlog.
	*/
	public $liveBlogUpdate;

}