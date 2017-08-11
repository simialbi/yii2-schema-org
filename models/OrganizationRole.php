<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for OrganizationRole
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OrganizationRole
 */
class OrganizationRole extends Role {
	/**
	* @var integer A number associated with a role in an organization, for example, the number on an athlete's jersey.
	*/
	public $numberedPosition;

}