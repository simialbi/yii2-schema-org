<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The publication format of the book.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BookFormatType
 */
class BookFormatType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}