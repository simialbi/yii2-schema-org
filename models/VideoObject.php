<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for VideoObject
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VideoObject
 */
class VideoObject extends MediaObject {
	/**
	* @var Person An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	*/
	public $actor;

	/**
	* @var string The caption for this object.
	*/
	public $caption;

	/**
	* @var Person A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	*/
	public $director;

	/**
	* @var MusicGroup|Person The composer of the soundtrack.
	*/
	public $musicBy;

	/**
	* @var ImageObject Thumbnail image for an image or video.
	*/
	public $thumbnail;

	/**
	* @var string If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
	*/
	public $transcript;

	/**
	* @var string The frame size of the video.
	*/
	public $videoFrameSize;

	/**
	* @var string The quality of the video.
	*/
	public $videoQuality;

}