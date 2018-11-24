<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A radio episode which can be part of a series or season.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RadioEpisode
 */
class RadioEpisode extends Episode {
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can
     * be associated with individual items or with a series, episode, clip. Supersedes
     * actors.
     *
     * @var Person
     */
    public $actor;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
     * Directors can be associated with individual items or with a series, episode,
     * clip. Supersedes directors.
     *
     * @var Person
     */
    public $director;

    /**
     * Position of the episode within an ordered group of episodes.
     *
     * @var integer|string
     */
    public $episodeNumber;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person
     */
    public $musicBy;

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

    /**
     * The production company or studio responsible for the item e.g. series, video
     * game, episode etc.
     *
     * @var Organization
     */
    public $productionCompany;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     * @var VideoObject
     */
    public $trailer;


}