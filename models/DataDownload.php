<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for DataDownload
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DataDownload
 */
class DataDownload extends MediaObject {
	/**
	* @var NewsArticle A NewsArticle associated with the Media Object.
	*/
	public $associatedArticle;

	/**
	* @var string The bitrate of the media object.
	*/
	public $bitrate;

	/**
	* @var string File size in (mega/kilo) bytes.
	*/
	public $contentSize;

	/**
	* @var string Actual bytes of the media object, for example the image file or video file.
	*/
	public $contentUrl;

	/**
	* @var Duration The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	*/
	public $duration;

	/**
	* @var string A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag.
	*/
	public $embedUrl;

	/**
	* @var CreativeWork The CreativeWork encoded by this media object.
	*/
	public $encodesCreativeWork;

	/**
	* @var string mp3, mpeg4, etc.
	*/
	public $encodingFormat;

	/**
	* @var string Date the content expires and is no longer useful or available. Useful for videos.
	*/
	public $expires;

	/**
	* @var Distance|QuantitativeValue The height of the item.
	*/
	public $height;

	/**
	* @var string Player type required—for example, Flash or Silverlight.
	*/
	public $playerType;

	/**
	* @var Organization The production company or studio responsible for the item e.g. series, video game, episode etc.
	*/
	public $productionCompany;

	/**
	* @var Place The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in ISO 3166 format.
	*/
	public $regionsAllowed;

	/**
	* @var boolean Indicates if use of the media require a subscription  (either paid or free). Allowed values are true or false (note that an earlier version had 'yes', 'no').
	*/
	public $requiresSubscription;

	/**
	* @var string Date when this media object was uploaded to this site.
	*/
	public $uploadDate;

	/**
	* @var Distance|QuantitativeValue The width of the item.
	*/
	public $width;

}