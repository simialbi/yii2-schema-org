<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PerformanceRole
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PerformanceRole
 */
class PerformanceRole extends Role {
	/**
	* @var string The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
	*/
	public $characterName;

}