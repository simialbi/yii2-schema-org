<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ImageObject
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ImageObject
 */
class ImageObject extends MediaObject {
	/**
	* @var string The caption for this object.
	*/
	public $caption;

	/**
	* @var PropertyValue|string exif data for this object.
	*/
	public $exifData;

	/**
	* @var boolean Indicates whether this image is representative of the content of the page.
	*/
	public $representativeOfPage;

	/**
	* @var ImageObject Thumbnail image for an image or video.
	*/
	public $thumbnail;

}