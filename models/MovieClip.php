<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MovieClip
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MovieClip
 */
class MovieClip extends Clip {
	/**
	* @var Person An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	*/
	public $actor;

	/**
	* @var integer|string Position of the clip within an ordered group of clips.
	*/
	public $clipNumber;

	/**
	* @var Person A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	*/
	public $director;

	/**
	* @var MusicGroup|Person The composer of the soundtrack.
	*/
	public $musicBy;

	/**
	* @var Episode The episode to which this clip belongs.
	*/
	public $partOfEpisode;

	/**
	* @var CreativeWorkSeason The season to which this episode belongs.
	*/
	public $partOfSeason;

	/**
	* @var CreativeWorkSeries The series to which this episode or season belongs. Supersedes partOfTVSeries.
	*/
	public $partOfSeries;

}