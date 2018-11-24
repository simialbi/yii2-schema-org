<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A short segment/part of a video game.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VideoGameClip
 */
class VideoGameClip extends Clip {
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can
     * be associated with individual items or with a series, episode, clip. Supersedes
     * actors.
     *
     * @var Person
     */
    public $actor;

    /**
     * Position of the clip within an ordered group of clips.
     *
     * @var integer|string
     */
    public $clipNumber;

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
     * The episode to which this clip belongs.
     *
     * @var Episode
     */
    public $partOfEpisode;

    /**
     * The season to which this episode belongs.
     *
     * @var CreativeWorkSeason
     */
    public $partOfSeason;

    /**
     * The series to which this episode or season belongs. Supersedes partOfTVSeries.
     *
     * @var CreativeWorkSeries
     */
    public $partOfSeries;

}