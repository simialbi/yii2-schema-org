<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A school.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/School
 */
class School extends EducationalOrganization {
    /**
     * Alumni of an organization. Inverse property: alumniOf.
     *
     * @var Person
     */
    public $alumni;


}