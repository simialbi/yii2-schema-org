<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An electronic file or document.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DigitalDocument
 */
class DigitalDocument extends CreativeWork {
    /**
     * A permission related to the access to this document (e.g. permission to read or
     * write an electronic document). For a public document, specify a grantee with an
     * Audience with audienceType equal to "public".
     *
     * @var DigitalDocumentPermission
     */
    public $hasDigitalDocumentPermission;

}