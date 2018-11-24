<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A subclass of Role used to describe roles within organizations.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OrganizationRole
 */
class OrganizationRole extends Role {
    /**
     * A number associated with a role in an organization, for example, the number on
     * an athlete's jersey.
     *
     * @var integer
     */
    public $numberedPosition;


}