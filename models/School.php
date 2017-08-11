<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for School
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/School
 */
class School extends EducationalOrganization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}