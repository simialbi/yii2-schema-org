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

	/**
	* @var string The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
	*/
	public $issn;

}