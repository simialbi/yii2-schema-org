<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A specific question - e.g. from a user seeking answers online, or collected in a
 * Frequently Asked Questions (FAQ) document.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Question
 */
class Question extends CreativeWork {
    /**
     * The answer(s) that has been accepted as best, typically on a Question/Answer
     * site. Sites vary in their selection mechanisms, e.g. drawing on community
     * opinion and/or the view of the Question author.
     *
     * @var Answer|ItemList
     */
    public $acceptedAnswer;

    /**
     * The number of answers this question has received.
     *
     * @var integer
     */
    public $answerCount;

    /**
     * The number of downvotes this question, answer or comment has received from the
     * community.
     *
     * @var integer
     */
    public $downvoteCount;

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a
     * Question/Answer site.
     *
     * @var Answer|ItemList
     */
    public $suggestedAnswer;

    /**
     * The number of upvotes this question, answer or comment has received from the
     * community.
     *
     * @var integer
     */
    public $upvoteCount;


}