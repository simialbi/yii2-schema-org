<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A GeoCircle is a GeoShape representing a circular geographic area. As it is a
 * GeoShape
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GeoCircle
 */
class GeoCircle extends GeoShape {
    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
     *
     * @var GeoCoordinates
     */
    public $geoMidpoint;

    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated
     * otherwise via Distance notation).
     *
     * @var Distance|integer|string
     */
    public $geoRadius;

}