<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An image file.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ImageObject
 */
class ImageObject extends MediaObject {
    /**
     * The caption for this object.
     *
     * @var string
     */
    public $caption;

    /**
     * exif data for this object.
     *
     * @var PropertyValue|string
     */
    public $exifData;

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     * @var boolean
     */
    public $representativeOfPage;

    /**
     * Thumbnail image for an image or video.
     *
     * @var ImageObject
     */
    public $thumbnail;

}