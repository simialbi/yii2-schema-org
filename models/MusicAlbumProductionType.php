<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * No comment
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicAlbumProductionType
 */
class MusicAlbumProductionType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}