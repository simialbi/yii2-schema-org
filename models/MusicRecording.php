<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MusicRecording
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicRecording
 */
class MusicRecording extends CreativeWork {
	/**
	* @var MusicGroup The artist that performed this album or recording.
	*/
	public $byArtist;

	/**
	* @var Duration The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	*/
	public $duration;

	/**
	* @var MusicAlbum The album to which this recording belongs.
	*/
	public $inAlbum;

	/**
	* @var MusicPlaylist The playlist to which this recording belongs.
	*/
	public $inPlaylist;

	/**
	* @var string The International Standard Recording Code for the recording.
	*/
	public $isrcCode;

	/**
	* @var MusicComposition The composition this track is a recording of. Inverse property: recordedAs.
	*/
	public $recordingOf;

}