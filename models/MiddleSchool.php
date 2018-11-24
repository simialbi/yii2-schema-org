<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A middle school (typically for children aged around 11-14, although this varies
 * somewhat).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MiddleSchool
 */
class MiddleSchool extends EducationalOrganization {
    /**
     * Alumni of an organization. Inverse property: alumniOf.
     *
     * @var Person
     */
    public $alumni;

}