<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A music recording (track), usually a single song.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicRecording
 */
class MusicRecording extends CreativeWork {
    /**
     * The artist that performed this album or recording.
     *
     * @var MusicGroup
     */
    public $byArtist;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date
     * format.
     *
     * @var Duration
     */
    public $duration;

    /**
     * The album to which this recording belongs.
     *
     * @var MusicAlbum
     */
    public $inAlbum;

    /**
     * The playlist to which this recording belongs.
     *
     * @var MusicPlaylist
     */
    public $inPlaylist;

    /**
     * The International Standard Recording Code for the recording.
     *
     * @var string
     */
    public $isrcCode;

    /**
     * The composition this track is a recording of. Inverse property: recordedAs.
     *
     * @var MusicComposition
     */
    public $recordingOf;

}