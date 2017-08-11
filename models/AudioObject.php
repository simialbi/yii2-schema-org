<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for AudioObject
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AudioObject
 */
class AudioObject extends MediaObject {
	/**
	* @var string If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
	*/
	public $transcript;

}