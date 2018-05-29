<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Hospital
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Hospital
 */
class Hospital extends EmergencyService {
	/**
	* @var MedicalProcedure|MedicalTest|MedicalTherapy A medical service available from this provider.
	*/
	public $availableService;

	/**
	* @var MedicalSpecialty A medical specialty of the provider.
	*/
	public $medicalSpecialty;

}