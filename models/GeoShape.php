<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for GeoShape
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GeoShape
 */
class GeoShape extends StructuredValue {
	/**
	* @var PostalAddress|string Physical address of the item.
	*/
	public $address;

	/**
	* @var Country|string The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	*/
	public $addressCountry;

	/**
	* @var string A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the second point is the upper corner. A box is expressed as two points separated by a space character.
	*/
	public $box;

	/**
	* @var string A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
	*/
	public $circle;

	/**
	* @var integer|string The elevation of a location (WGS 84).
	*/
	public $elevation;

	/**
	* @var string A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
	*/
	public $line;

	/**
	* @var string A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
	*/
	public $polygon;

	/**
	* @var string The postal code. For example, 94043.
	*/
	public $postalCode;

}