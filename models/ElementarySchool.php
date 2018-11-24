<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An elementary school.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ElementarySchool
 */
class ElementarySchool extends EducationalOrganization {
    /**
     * Alumni of an organization. Inverse property: alumniOf.
     *
     * @var Person
     */
    public $alumni;


}