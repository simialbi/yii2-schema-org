<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Periodical
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Periodical
 */
class Periodical extends CreativeWorkSeries {
	/**
	* @var string The International Standard Serial Number (ISSN) that identifies this periodical. You can repeat this property to (for example) identify different formats of this periodical.
	*/
	public $issn;

}