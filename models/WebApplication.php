<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for WebApplication
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/WebApplication
 */
class WebApplication extends SoftwareApplication {
	/**
	* @var string Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
	*/
	public $browserRequirements;

}