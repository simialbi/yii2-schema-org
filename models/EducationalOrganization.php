<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An educational organization.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EducationalOrganization
 */
class EducationalOrganization extends Organization {
    /**
     * Alumni of an organization. Inverse property: alumniOf.
     *
     * @var Person
     */
    public $alumni;


}