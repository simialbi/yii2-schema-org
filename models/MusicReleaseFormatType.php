<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Format of this release (the type of recording media used, ie. compact disc,
 * digital media, LP, etc.).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicReleaseFormatType
 */
class MusicReleaseFormatType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}