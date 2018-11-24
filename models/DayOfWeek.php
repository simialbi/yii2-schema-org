<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The day of the week, e.g. used to specify to which day the opening hours of an
 * OpeningHoursSpecification refer.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DayOfWeek
 */
class DayOfWeek extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}