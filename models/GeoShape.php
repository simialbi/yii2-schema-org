<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The geographic shape of a place. A GeoShape can be described using several
 * properties whose values are based on latitude/longitude pairs. Either whitespace
 * or commas can be used to separate latitude and longitude; whitespace should be
 * used when writing a list of several such points.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GeoShape
 */
class GeoShape extends StructuredValue {
    /**
     * Physical address of the item.
     *
     * @var PostalAddress|string
     */
    public $address;

    /**
     * The country. For example, USA. You can also provide the two-letter ISO 3166-1
     * alpha-2 country code.
     *
     * @var Country|string
     */
    public $addressCountry;

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first
     * point is the lower corner, the second point is the upper corner. A box is
     * expressed as two points separated by a space character.
     *
     * @var string
     */
    public $box;

    /**
     * A circle is the circular region of a specified radius centered at a specified
     * latitude and longitude. A circle is expressed as a pair followed by a radius in
     * meters.
     *
     * @var string
     */
    public $circle;

    /**
     * The elevation of a location (WGS 84).
     *
     * @var integer|string
     */
    public $elevation;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is
     * expressed as a series of two or more point objects separated by space.
     *
     * @var string
     */
    public $line;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting
     * and ending points are the same. A polygon is expressed as a series of four or
     * more space delimited points where the first and final points are identical.
     *
     * @var string
     */
    public $polygon;

    /**
     * The postal code. For example, 94043.
     *
     * @var string
     */
    public $postalCode;


}