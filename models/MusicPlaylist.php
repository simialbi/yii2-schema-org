<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A collection of music tracks in playlist form.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicPlaylist
 */
class MusicPlaylist extends CreativeWork {
    /**
     * The number of tracks in this album or playlist.
     *
     * @var integer
     */
    public $numTracks;

    /**
     * A music recording (track)—usually a single song. If an ItemList is given, the
     * list should contain items of type MusicRecording. Supersedes tracks.
     *
     * @var ItemList|MusicRecording
     */
    public $track;

}