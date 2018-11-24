<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An audio file.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AudioObject
 */
class AudioObject extends MediaObject {
    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that
     * object.
     *
     * @var string
     */
    public $transcript;

}