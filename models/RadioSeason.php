<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Season dedicated to radio broadcast and associated online delivery.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RadioSeason
 */
class RadioSeason extends CreativeWorkSeason {
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
     * The end date and time of the item (in ISO 8601 date format).
     *
     * @var string
     */
    public $endDate;

    /**
     * An episode of a tv, radio or game media within a series or season. Supersedes
     * episodes.
     *
     * @var Episode
     */
    public $episode;

    /**
     * The number of episodes in this season or series.
     *
     * @var integer
     */
    public $numberOfEpisodes;

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
     * Position of the season within an ordered group of seasons.
     *
     * @var integer|string
     */
    public $seasonNumber;

    /**
     * The start date and time of the item (in ISO 8601 date format).
     *
     * @var string
     */
    public $startDate;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     * @var VideoObject
     */
    public $trailer;


}