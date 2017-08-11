<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Movie
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Movie
 */
class Movie extends CreativeWork {
	/**
	* @var Person An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	*/
	public $actor;

	/**
	* @var Country The country of the principal offices of the production company or individual responsible for the movie or program.
	*/
	public $countryOfOrigin;

	/**
	* @var Person A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	*/
	public $director;

	/**
	* @var Duration The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	*/
	public $duration;

	/**
	* @var MusicGroup|Person The composer of the soundtrack.
	*/
	public $musicBy;

	/**
	* @var Organization The production company or studio responsible for the item e.g. series, video game, episode etc.
	*/
	public $productionCompany;

	/**
	* @var Language|string Languages in which subtitles/captions are available, in IETF BCP 47 standard format.
	*/
	public $subtitleLanguage;

	/**
	* @var VideoObject The trailer of a movie or tv/radio series, season, episode, etc.
	*/
	public $trailer;

}