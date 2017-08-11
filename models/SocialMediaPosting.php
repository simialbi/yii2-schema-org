<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for SocialMediaPosting
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SocialMediaPosting
 */
class SocialMediaPosting extends Article {
	/**
	* @var CreativeWork A CreativeWork such as an image, video, or audio clip shared as part of this posting.
	*/
	public $sharedContent;

}