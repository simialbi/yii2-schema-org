<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MusicGroup
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicGroup
 */
class MusicGroup extends PerformingGroup {
	/**
	* @var MusicAlbum A music album. Supersedes albums.
	*/
	public $album;

	/**
	* @var string Genre of the creative work, broadcast channel or group.
	*/
	public $genre;

	/**
	* @var ItemList|MusicRecording A music recording (track)—usually a single song. If an ItemList is given, the list should contain items of type MusicRecording. Supersedes tracks.
	*/
	public $track;

}