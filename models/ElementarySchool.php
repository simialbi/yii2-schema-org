<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ElementarySchool
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ElementarySchool
 */
class ElementarySchool extends EducationalOrganization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}