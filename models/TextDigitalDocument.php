<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A file composed primarily of text.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TextDigitalDocument
 */
class TextDigitalDocument extends DigitalDocument {
    /**
     * A permission related to the access to this document (e.g. permission to read or
     * write an electronic document). For a public document, specify a grantee with an
     * Audience with audienceType equal to "public".
     *
     * @var DigitalDocumentPermission
     */
    public $hasDigitalDocumentPermission;


}