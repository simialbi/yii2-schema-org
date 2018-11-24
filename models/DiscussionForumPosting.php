<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A posting to a discussion forum.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DiscussionForumPosting
 */
class DiscussionForumPosting extends SocialMediaPosting {
    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this
     * posting.
     *
     * @var CreativeWork
     */
    public $sharedContent;


}