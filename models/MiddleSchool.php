<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MiddleSchool
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MiddleSchool
 */
class MiddleSchool extends EducationalOrganization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}