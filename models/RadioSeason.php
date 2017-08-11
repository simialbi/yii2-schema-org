<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for RadioSeason
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RadioSeason
 */
class RadioSeason extends CreativeWorkSeason {
	/**
	* @var Person An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	*/
	public $actor;

	/**
	* @var Person A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	*/
	public $director;

	/**
	* @var string The end date and time of the item (in ISO 8601 date format).
	*/
	public $endDate;

	/**
	* @var Episode An episode of a tv, radio or game media within a series or season. Supersedes episodes.
	*/
	public $episode;

	/**
	* @var integer The number of episodes in this season or series.
	*/
	public $numberOfEpisodes;

	/**
	* @var CreativeWorkSeries The series to which this episode or season belongs. Supersedes partOfTVSeries.
	*/
	public $partOfSeries;

	/**
	* @var Organization The production company or studio responsible for the item e.g. series, video game, episode etc.
	*/
	public $productionCompany;

	/**
	* @var integer|string Position of the season within an ordered group of seasons.
	*/
	public $seasonNumber;

	/**
	* @var string The start date and time of the item (in ISO 8601 date format).
	*/
	public $startDate;

	/**
	* @var VideoObject The trailer of a movie or tv/radio series, season, episode, etc.
	*/
	public $trailer;

}