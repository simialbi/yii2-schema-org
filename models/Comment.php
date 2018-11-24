<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A comment on an item - for example, a comment on a blog post. The comment's
 * content is expressed via the text property, and its topic via about, properties
 * shared with all CreativeWorks.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Comment
 */
class Comment extends CreativeWork {
    /**
     * The number of downvotes this question, answer or comment has received from the
     * community.
     *
     * @var integer
     */
    public $downvoteCount;

    /**
     * The parent of a question, answer or item in general.
     *
     * @var Question
     */
    public $parentItem;

    /**
     * The number of upvotes this question, answer or comment has received from the
     * community.
     *
     * @var integer
     */
    public $upvoteCount;

}