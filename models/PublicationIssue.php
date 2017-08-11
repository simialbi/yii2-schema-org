<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PublicationIssue
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PublicationIssue
 */
class PublicationIssue extends CreativeWork {
	/**
	* @var integer|string Identifies the issue of publication; for example, "iii" or "2".
	*/
	public $issueNumber;

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

}