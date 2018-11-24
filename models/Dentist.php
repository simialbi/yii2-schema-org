<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A dentist.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Dentist
 */
class Dentist extends MedicalOrganization {
    /**
     * Name or unique ID of network. (Networks are often reused across different
     * insurance plans).
     *
     * @var string
     */
    public $healthPlanNetworkId;

    /**
     * Whether the provider is accepting new patients.
     *
     * @var boolean
     */
    public $isAcceptingNewPatients;

    /**
     * A medical specialty of the provider.
     *
     * @var MedicalSpecialty
     */
    public $medicalSpecialty;


}