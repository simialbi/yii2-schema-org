<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for SportsOrganization
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SportsOrganization
 */
class SportsOrganization extends Organization {
	/**
	* @var string A type of sport (e.g. Baseball).
	*/
	public $sport;

}