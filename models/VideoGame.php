<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for VideoGame
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VideoGame
 */
class VideoGame extends SoftwareApplication {
	/**
	* @var Person An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	*/
	public $actor;

	/**
	* @var CreativeWork Cheat codes to the game.
	*/
	public $cheatCode;

	/**
	* @var Person A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	*/
	public $director;

	/**
	* @var string|Thing|string The electronic systems used to play video games.
	*/
	public $gamePlatform;

	/**
	* @var GameServer The server on which  it is possible to play the game. Inverse property: game.
	*/
	public $gameServer;

	/**
	* @var CreativeWork Links to tips, tactics, etc.
	*/
	public $gameTip;

	/**
	* @var MusicGroup|Person The composer of the soundtrack.
	*/
	public $musicBy;

	/**
	* @var GamePlayMode Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
	*/
	public $playMode;

	/**
	* @var VideoObject The trailer of a movie or tv/radio series, season, episode, etc.
	*/
	public $trailer;

}