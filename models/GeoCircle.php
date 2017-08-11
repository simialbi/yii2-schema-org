<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for GeoCircle
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GeoCircle
 */
class GeoCircle extends GeoShape {
	/**
	* @var GeoCoordinates Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
	*/
	public $geoMidpoint;

	/**
	* @var Distance|integer|string Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
	*/
	public $geoRadius;

}