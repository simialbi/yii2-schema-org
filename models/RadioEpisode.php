<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for RadioEpisode
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RadioEpisode
 */
class RadioEpisode extends Episode {
	/**
	* @var Person An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	*/
	public $actor;

	/**
	* @var Person A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	*/
	public $director;

	/**
	* @var integer|string Position of the episode within an ordered group of episodes.
	*/
	public $episodeNumber;

	/**
	* @var MusicGroup|Person The composer of the soundtrack.
	*/
	public $musicBy;

	/**
	* @var CreativeWorkSeason The season to which this episode belongs.
	*/
	public $partOfSeason;

	/**
	* @var CreativeWorkSeries The series to which this episode or season belongs. Supersedes partOfTVSeries.
	*/
	public $partOfSeries;

	/**
	* @var Organization The production company or studio responsible for the item e.g. series, video game, episode etc.
	*/
	public $productionCompany;

	/**
	* @var VideoObject The trailer of a movie or tv/radio series, season, episode, etc.
	*/
	public $trailer;

}