<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A service provided by a government organization, e.g. food stamps, veterans
 * benefits, etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GovernmentService
 */
class GovernmentService extends Service {
    /**
     * The operating organization, if different from the provider.  This enables the
     * representation of services that are provided by an organization, but operated by
     * another organization like a subcontractor.
     *
     * @var Organization
     */
    public $serviceOperator;


}