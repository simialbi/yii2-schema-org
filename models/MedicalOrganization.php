<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A medical organization (physical or not), such as hospital, institution or
 * clinic.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MedicalOrganization
 */
class MedicalOrganization extends Organization {
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