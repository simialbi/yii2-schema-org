<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A movie.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Movie
 */
class Movie extends CreativeWork {
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can
     * be associated with individual items or with a series, episode, clip. Supersedes
     * actors.
     *
     * @var Person
     */
    public $actor;

    /**
     * The country of the principal offices of the production company or individual
     * responsible for the movie or program.
     *
     * @var Country
     */
    public $countryOfOrigin;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
     * Directors can be associated with individual items or with a series, episode,
     * clip. Supersedes directors.
     *
     * @var Person
     */
    public $director;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date
     * format.
     *
     * @var Duration
     */
    public $duration;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person
     */
    public $musicBy;

    /**
     * The production company or studio responsible for the item e.g. series, video
     * game, episode etc.
     *
     * @var Organization
     */
    public $productionCompany;

    /**
     * Languages in which subtitles/captions are available, in IETF BCP 47 standard
     * format.
     *
     * @var Language|string
     */
    public $subtitleLanguage;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     * @var VideoObject
     */
    public $trailer;


}