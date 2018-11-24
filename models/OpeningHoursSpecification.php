<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A structured value providing information about the opening hours of a place or a
 * certain service inside a place.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OpeningHoursSpecification
 */
class OpeningHoursSpecification extends StructuredValue {
    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     * @var string
     */
    public $closes;

    /**
     * The day of the week for which these opening hours are valid.
     *
     * @var DayOfWeek
     */
    public $dayOfWeek;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     * @var string
     */
    public $opens;

    /**
     * The date when the item becomes valid.
     *
     * @var string
     */
    public $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @var string
     */
    public $validThrough;

}