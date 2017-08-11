<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for NewsArticle
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/NewsArticle
 */
class NewsArticle extends Article {
	/**
	* @var string The location where the NewsArticle was produced.
	*/
	public $dateline;

	/**
	* @var string The number of the column in which the NewsArticle appears in the print edition.
	*/
	public $printColumn;

	/**
	* @var string The edition of the print product in which the NewsArticle appears.
	*/
	public $printEdition;

	/**
	* @var string If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
	*/
	public $printPage;

	/**
	* @var string If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
	*/
	public $printSection;

}