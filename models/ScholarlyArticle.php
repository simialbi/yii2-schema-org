<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ScholarlyArticle
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ScholarlyArticle
 */
class ScholarlyArticle extends Article {
	/**
	* @var string The actual body of the article.
	*/
	public $articleBody;

	/**
	* @var string Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
	*/
	public $articleSection;

	/**
	* @var integer|string The page on which the work ends; for example "138" or "xvi".
	*/
	public $pageEnd;

	/**
	* @var integer|string The page on which the work starts; for example "135" or "xiii".
	*/
	public $pageStart;

	/**
	* @var string Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
	*/
	public $pagination;

	/**
	* @var integer The number of words in the text of the Article.
	*/
	public $wordCount;

}