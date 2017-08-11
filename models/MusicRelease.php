<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MusicRelease
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicRelease
 */
class MusicRelease extends MusicPlaylist {
	/**
	* @var string The catalog number for the release.
	*/
	public $catalogNumber;

	/**
	* @var Organization|Person The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
	*/
	public $creditedTo;

	/**
	* @var Duration The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	*/
	public $duration;

	/**
	* @var MusicReleaseFormatType Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
	*/
	public $musicReleaseFormat;

	/**
	* @var Organization The label that issued the release.
	*/
	public $recordLabel;

	/**
	* @var MusicAlbum The album this is a release of. Inverse property: albumRelease.
	*/
	public $releaseOf;

}