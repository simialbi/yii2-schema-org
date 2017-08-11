<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Blog
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Blog
 */
class Blog extends CreativeWork {
	/**
	* @var BlogPosting A posting that is part of this blog. Supersedes blogPosts.
	*/
	public $blogPost;

}