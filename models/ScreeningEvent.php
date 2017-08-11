<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ScreeningEvent
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ScreeningEvent
 */
class ScreeningEvent extends Event {
	/**
	* @var Language|string Languages in which subtitles/captions are available, in IETF BCP 47 standard format.
	*/
	public $subtitleLanguage;

	/**
	* @var string The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
	*/
	public $videoFormat;

	/**
	* @var Movie The movie presented during this event.
	*/
	public $workPresented;

}