<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for HighSchool
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HighSchool
 */
class HighSchool extends EducationalOrganization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}