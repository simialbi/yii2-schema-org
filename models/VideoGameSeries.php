<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A video game series.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VideoGameSeries
 */
class VideoGameSeries extends CreativeWorkSeries {
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can
     * be associated with individual items or with a series, episode, clip. Supersedes
     * actors.
     *
     * @var Person
     */
    public $actor;

    /**
     * A piece of data that represents a particular aspect of a fictional character
     * (skill, power, character points, advantage, disadvantage).
     *
     * @var Thing
     */
    public $characterAttribute;

    /**
     * Cheat codes to the game.
     *
     * @var CreativeWork
     */
    public $cheatCode;

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
     * An item is an object within the game world that can be collected by a player or,
     * occasionally, a non-player character.
     *
     * @var Thing
     */
    public $gameItem;

    /**
     * Real or fictional location of the game (or part of game).
     *
     * @var Place|PostalAddress|string
     */
    public $gameLocation;

    /**
     * The electronic systems used to play video games.
     *
     * @var string|Thing|string
     */
    public $gamePlatform;

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
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     * @var QuantitativeValue
     */
    public $numberOfPlayers;

    /**
     * The number of seasons in this series.
     *
     * @var integer
     */
    public $numberOfSeasons;

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The game
     * can be marked as multi-player, co-op and single-player at the same time.
     *
     * @var GamePlayMode
     */
    public $playMode;

    /**
     * The production company or studio responsible for the item e.g. series, video
     * game, episode etc.
     *
     * @var Organization
     */
    public $productionCompany;

    /**
     * The task that a player-controlled character, or group of characters may complete
     * in order to gain a reward.
     *
     * @var Thing
     */
    public $quest;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     * @var VideoObject
     */
    public $trailer;

}