<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A blog post.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BlogPosting
 */
class BlogPosting extends SocialMediaPosting {
    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this
     * posting.
     *
     * @var CreativeWork
     */
    public $sharedContent;

}