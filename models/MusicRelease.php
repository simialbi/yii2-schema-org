<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A MusicRelease is a specific release of a music album.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicRelease
 */
class MusicRelease extends MusicPlaylist {
    /**
     * The catalog number for the release.
     *
     * @var string
     */
    public $catalogNumber;

    /**
     * The group the release is credited to if different than the byArtist. For
     * example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady
     * Gaga.
     *
     * @var Organization|Person
     */
    public $creditedTo;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date
     * format.
     *
     * @var Duration
     */
    public $duration;

    /**
     * Format of this release (the type of recording media used, ie. compact disc,
     * digital media, LP, etc.).
     *
     * @var MusicReleaseFormatType
     */
    public $musicReleaseFormat;

    /**
     * The label that issued the release.
     *
     * @var Organization
     */
    public $recordLabel;

    /**
     * The album this is a release of. Inverse property: albumRelease.
     *
     * @var MusicAlbum
     */
    public $releaseOf;


}