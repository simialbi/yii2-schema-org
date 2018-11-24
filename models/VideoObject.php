<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A video file.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VideoObject
 */
class VideoObject extends MediaObject {
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can
     * be associated with individual items or with a series, episode, clip. Supersedes
     * actors.
     *
     * @var Person
     */
    public $actor;

    /**
     * The caption for this object.
     *
     * @var string
     */
    public $caption;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
     * Directors can be associated with individual items or with a series, episode,
     * clip. Supersedes directors.
     *
     * @var Person
     */
    public $director;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person
     */
    public $musicBy;

    /**
     * Thumbnail image for an image or video.
     *
     * @var ImageObject
     */
    public $thumbnail;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that
     * object.
     *
     * @var string
     */
    public $transcript;

    /**
     * The frame size of the video.
     *
     * @var string
     */
    public $videoFrameSize;

    /**
     * The quality of the video.
     *
     * @var string
     */
    public $videoQuality;

}