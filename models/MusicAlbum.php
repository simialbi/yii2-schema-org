<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A collection of music tracks.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicAlbum
 */
class MusicAlbum extends MusicPlaylist {
    /**
     * Classification of the album by it's type of content: soundtrack, live album,
     * studio album, etc.
     *
     * @var MusicAlbumProductionType
     */
    public $albumProductionType;

    /**
     * A release of this album. Inverse property: releaseOf.
     *
     * @var MusicRelease
     */
    public $albumRelease;

    /**
     * The kind of release which this album is: single, EP or album.
     *
     * @var MusicAlbumReleaseType
     */
    public $albumReleaseType;

    /**
     * The artist that performed this album or recording.
     *
     * @var MusicGroup
     */
    public $byArtist;


}