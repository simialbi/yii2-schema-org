<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Web applications.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/WebApplication
 */
class WebApplication extends SoftwareApplication {
    /**
     * Specifies browser requirements in human-readable text. For example, 'requires
     * HTML5 support'.
     *
     * @var string
     */
    public $browserRequirements;


}