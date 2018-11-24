<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A post to a social media platform, including blog posts, tweets, Facebook posts,
 * etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SocialMediaPosting
 */
class SocialMediaPosting extends Article {
    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this
     * posting.
     *
     * @var CreativeWork
     */
    public $sharedContent;


}