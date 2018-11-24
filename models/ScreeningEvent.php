<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A screening of a movie or other video.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ScreeningEvent
 */
class ScreeningEvent extends Event {
    /**
     * Languages in which subtitles/captions are available, in IETF BCP 47 standard
     * format.
     *
     * @var Language|string
     */
    public $subtitleLanguage;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     * @var string
     */
    public $videoFormat;

    /**
     * The movie presented during this event.
     *
     * @var Movie
     */
    public $workPresented;


}