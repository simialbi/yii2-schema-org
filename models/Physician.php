<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Physician
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Physician
 */
class Physician extends MedicalOrganization {
	/**
	* @var MedicalProcedure|MedicalTest|MedicalTherapy A medical service available from this provider.
	*/
	public $availableService;

	/**
	* @var Hospital A hospital with which the physician or office is affiliated.
	*/
	public $hospitalAffiliation;

	/**
	* @var MedicalSpecialty A medical specialty of the provider.
	*/
	public $medicalSpecialty;

}