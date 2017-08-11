<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for CollegeOrUniversity
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CollegeOrUniversity
 */
class CollegeOrUniversity extends EducationalOrganization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}