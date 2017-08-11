<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Question
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Question
 */
class Question extends CreativeWork {
	/**
	* @var Answer The answer that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
	*/
	public $acceptedAnswer;

	/**
	* @var integer The number of answers this question has received.
	*/
	public $answerCount;

	/**
	* @var integer The number of downvotes this question, answer or comment has received from the community.
	*/
	public $downvoteCount;

	/**
	* @var Answer An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
	*/
	public $suggestedAnswer;

	/**
	* @var integer The number of upvotes this question, answer or comment has received from the community.
	*/
	public $upvoteCount;

}