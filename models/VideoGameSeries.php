<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for VideoGameSeries
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VideoGameSeries
 */
class VideoGameSeries extends CreativeWorkSeries {
	/**
	* @var Person An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	*/
	public $actor;

	/**
	* @var Thing A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
	*/
	public $characterAttribute;

	/**
	* @var CreativeWork Cheat codes to the game.
	*/
	public $cheatCode;

	/**
	* @var CreativeWorkSeason A season that is part of the media series. Supersedes season.
	*/
	public $containsSeason;

	/**
	* @var Person A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	*/
	public $director;

	/**
	* @var Episode An episode of a tv, radio or game media within a series or season. Supersedes episodes.
	*/
	public $episode;

	/**
	* @var Thing An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
	*/
	public $gameItem;

	/**
	* @var Place|PostalAddress|string Real or fictional location of the game (or part of game).
	*/
	public $gameLocation;

	/**
	* @var string|Thing|string The electronic systems used to play video games.
	*/
	public $gamePlatform;

	/**
	* @var MusicGroup|Person The composer of the soundtrack.
	*/
	public $musicBy;

	/**
	* @var integer The number of episodes in this season or series.
	*/
	public $numberOfEpisodes;

	/**
	* @var QuantitativeValue Indicate how many people can play this game (minimum, maximum, or range).
	*/
	public $numberOfPlayers;

	/**
	* @var integer The number of seasons in this series.
	*/
	public $numberOfSeasons;

	/**
	* @var GamePlayMode Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
	*/
	public $playMode;

	/**
	* @var Organization The production company or studio responsible for the item e.g. series, video game, episode etc.
	*/
	public $productionCompany;

	/**
	* @var Thing The task that a player-controlled character, or group of characters may complete in order to gain a reward.
	*/
	public $quest;

	/**
	* @var VideoObject The trailer of a movie or tv/radio series, season, episode, etc.
	*/
	public $trailer;

}