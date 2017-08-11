<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for BlogPosting
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BlogPosting
 */
class BlogPosting extends SocialMediaPosting {
	/**
	* @var CreativeWork A CreativeWork such as an image, video, or audio clip shared as part of this posting.
	*/
	public $sharedContent;

}