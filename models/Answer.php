<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An answer offered to a question; perhaps correct, perhaps opinionated or wrong.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Answer
 */
class Answer extends Comment {
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