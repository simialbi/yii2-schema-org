<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A hospital.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Hospital
 */
class Hospital extends EmergencyService {
    /**
     * A medical service available from this provider.
     *
     * @var MedicalProcedure|MedicalTest|MedicalTherapy
     */
    public $availableService;

    /**
     * A medical specialty of the provider.
     *
     * @var MedicalSpecialty
     */
    public $medicalSpecialty;

}