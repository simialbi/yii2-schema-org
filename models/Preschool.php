<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Preschool
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Preschool
 */
class Preschool extends EducationalOrganization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}