<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MusicAlbum
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicAlbum
 */
class MusicAlbum extends MusicPlaylist {
	/**
	* @var MusicAlbumProductionType Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
	*/
	public $albumProductionType;

	/**
	* @var MusicRelease A release of this album. Inverse property: releaseOf.
	*/
	public $albumRelease;

	/**
	* @var MusicAlbumReleaseType The kind of release which this album is: single, EP or album.
	*/
	public $albumReleaseType;

	/**
	* @var MusicGroup The artist that performed this album or recording.
	*/
	public $byArtist;

}