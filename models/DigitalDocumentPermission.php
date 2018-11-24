<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A permission for a particular person or group to access a particular file.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DigitalDocumentPermission
 */
class DigitalDocumentPermission extends Intangible {
    /**
     * The person, organization, contact point, or audience that has been granted this
     * permission.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $grantee;

    /**
     * The type of permission granted the person, organization, or audience.
     *
     * @var DigitalDocumentPermissionType
     */
    public $permissionType;


}