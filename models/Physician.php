<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A doctor's office.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Physician
 */
class Physician extends MedicalOrganization {
    /**
     * A medical service available from this provider.
     *
     * @var MedicalProcedure|MedicalTest|MedicalTherapy
     */
    public $availableService;

    /**
     * A hospital with which the physician or office is affiliated.
     *
     * @var Hospital
     */
    public $hospitalAffiliation;

    /**
     * A medical specialty of the provider.
     *
     * @var MedicalSpecialty
     */
    public $medicalSpecialty;


}