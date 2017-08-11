<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for EducationalOrganization
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EducationalOrganization
 */
class EducationalOrganization extends Organization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}