<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A media object, such as an image, video, or audio object embedded in a web page
 * or a downloadable dataset i.e. DataDownload. Note that a creative work may have
 * many media objects associated with it on the same web page. For example, a page
 * about a single song (MusicRecording) may have a music video (VideoObject), and a
 * high and low bandwidth audio stream (2 AudioObject's).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MediaObject
 */
class MediaObject extends CreativeWork {
    /**
     * A NewsArticle associated with the Media Object.
     *
     * @var NewsArticle
     */
    public $associatedArticle;

    /**
     * The bitrate of the media object.
     *
     * @var string
     */
    public $bitrate;

    /**
     * File size in (mega/kilo) bytes.
     *
     * @var string
     */
    public $contentSize;

    /**
     * Actual bytes of the media object, for example the image file or video file.
     *
     * @var string
     */
    public $contentUrl;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date
     * format.
     *
     * @var Duration
     */
    public $duration;

    /**
     * A URL pointing to a player for a specific video. In general, this is the
     * information in the src element of an embed tag and should not be the same as the
     * content of the loc tag.
     *
     * @var string
     */
    public $embedUrl;

    /**
     * The CreativeWork encoded by this media object.
     *
     * @var CreativeWork
     */
    public $encodesCreativeWork;

    /**
     * Media type typically expressed using a MIME format (see IANA site and MDN
     * reference) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for
     * .mp3 etc.).
     * 
     * In cases where a CreativeWork has several media type representations, encoding
     * can be used to indicate each MediaObject alongside particular encodingFormat
     * information.
     * 
     * Unregistered or niche encoding and file formats can be indicated instead via the
     * most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     * Supersedes fileFormat.
     *
     * @var string
     */
    public $encodingFormat;

    /**
     * The height of the item.
     *
     * @var Distance|QuantitativeValue
     */
    public $height;

    /**
     * Player type required—for example, Flash or Silverlight.
     *
     * @var string
     */
    public $playerType;

    /**
     * The production company or studio responsible for the item e.g. series, video
     * game, episode etc.
     *
     * @var Organization
     */
    public $productionCompany;

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to
     * be allowed everywhere. Specify the countries in ISO 3166 format.
     *
     * @var Place
     */
    public $regionsAllowed;

    /**
     * Indicates if use of the media require a subscription  (either paid or free).
     * Allowed values are true or false (note that an earlier version had 'yes', 'no').
     *
     * @var boolean|MediaSubscription
     */
    public $requiresSubscription;

    /**
     * Date when this media object was uploaded to this site.
     *
     * @var string
     */
    public $uploadDate;

    /**
     * The width of the item.
     *
     * @var Distance|QuantitativeValue
     */
    public $width;


}