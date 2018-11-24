<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A preschool.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Preschool
 */
class Preschool extends EducationalOrganization {
    /**
     * Alumni of an organization. Inverse property: alumniOf.
     *
     * @var Person
     */
    public $alumni;

}