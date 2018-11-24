<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A PerformanceRole is a Role that some entity places with regard to a theatrical
 * performance, e.g. in a Movie, TVSeries etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PerformanceRole
 */
class PerformanceRole extends Role {
    /**
     * The name of a character played in some acting or performing role, i.e. in a
     * PerformanceRole.
     *
     * @var string
     */
    public $characterName;


}