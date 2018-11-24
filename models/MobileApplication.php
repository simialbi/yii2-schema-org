<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A software application designed specifically to work well on a mobile device
 * such as a telephone.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MobileApplication
 */
class MobileApplication extends SoftwareApplication {
    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an
     * application may only work on a specific carrier network).
     *
     * @var string
     */
    public $carrierRequirements;


}