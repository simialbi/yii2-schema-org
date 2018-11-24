<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The kind of release which this album is: single, EP or album.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicAlbumReleaseType
 */
class MusicAlbumReleaseType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}