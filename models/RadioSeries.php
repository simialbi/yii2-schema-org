<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * CreativeWorkSeries dedicated to radio broadcast and associated online delivery.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RadioSeries
 */
class RadioSeries extends CreativeWorkSeries {
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can
     * be associated with individual items or with a series, episode, clip. Supersedes
     * actors.
     *
     * @var Person
     */
    public $actor;

    /**
     * A season that is part of the media series. Supersedes season.
     *
     * @var CreativeWorkSeason
     */
    public $containsSeason;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
     * Directors can be associated with individual items or with a series, episode,
     * clip. Supersedes directors.
     *
     * @var Person
     */
    public $director;

    /**
     * An episode of a tv, radio or game media within a series or season. Supersedes
     * episodes.
     *
     * @var Episode
     */
    public $episode;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person
     */
    public $musicBy;

    /**
     * The number of episodes in this season or series.
     *
     * @var integer
     */
    public $numberOfEpisodes;

    /**
     * The number of seasons in this series.
     *
     * @var integer
     */
    public $numberOfSeasons;

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