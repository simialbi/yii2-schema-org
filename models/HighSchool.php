<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A high school.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HighSchool
 */
class HighSchool extends EducationalOrganization {
    /**
     * Alumni of an organization. Inverse property: alumniOf.
     *
     * @var Person
     */
    public $alumni;


}