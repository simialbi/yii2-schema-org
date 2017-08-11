<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PublicationVolume
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PublicationVolume
 */
class PublicationVolume extends CreativeWork {
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
	* @var integer|string Identifies the volume of publication or multi-part work; for example, "iii" or "2".
	*/
	public $volumeNumber;

}