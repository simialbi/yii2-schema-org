<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo
 * musician.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicGroup
 */
class MusicGroup extends PerformingGroup {
    /**
     * A music album. Supersedes albums.
     *
     * @var MusicAlbum
     */
    public $album;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @var string
     */
    public $genre;

    /**
     * A music recording (track)—usually a single song. If an ItemList is given, the
     * list should contain items of type MusicRecording. Supersedes tracks.
     *
     * @var ItemList|MusicRecording
     */
    public $track;

}