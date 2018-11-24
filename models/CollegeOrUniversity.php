<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A college, university, or other third-level educational institution.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CollegeOrUniversity
 */
class CollegeOrUniversity extends EducationalOrganization {
    /**
     * Alumni of an organization. Inverse property: alumniOf.
     *
     * @var Person
     */
    public $alumni;

}