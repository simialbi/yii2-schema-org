<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A type of permission which can be granted for accessing a digital document.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DigitalDocumentPermissionType
 */
class DigitalDocumentPermissionType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}