<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A video game is an electronic game that involves human interaction with a user
 * interface to generate visual feedback on a video device.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VideoGame
 */
class VideoGame extends Game {
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can
     * be associated with individual items or with a series, episode, clip. Supersedes
     * actors.
     *
     * @var Person
     */
    public $actor;

    /**
     * Cheat codes to the game.
     *
     * @var CreativeWork
     */
    public $cheatCode;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
     * Directors can be associated with individual items or with a series, episode,
     * clip. Supersedes directors.
     *
     * @var Person
     */
    public $director;

    /**
     * The electronic systems used to play video games.
     *
     * @var string|Thing|string
     */
    public $gamePlatform;

    /**
     * The server on which  it is possible to play the game. Inverse property: game.
     *
     * @var GameServer
     */
    public $gameServer;

    /**
     * Links to tips, tactics, etc.
     *
     * @var CreativeWork
     */
    public $gameTip;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person
     */
    public $musicBy;

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The game
     * can be marked as multi-player, co-op and single-player at the same time.
     *
     * @var GamePlayMode
     */
    public $playMode;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     * @var VideoObject
     */
    public $trailer;

}