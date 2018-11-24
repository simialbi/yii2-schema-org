<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Lists or enumerations—for example, a list of cuisines or music genres, etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Enumeration
 */
class Enumeration extends Intangible {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}