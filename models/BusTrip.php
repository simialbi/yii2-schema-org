<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A trip on a commercial bus line.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BusTrip
 */
class BusTrip extends Trip {
    /**
     * The stop or station from which the bus arrives.
     *
     * @var BusStation|BusStop
     */
    public $arrivalBusStop;

    /**
     * The name of the bus (e.g. Bolt Express).
     *
     * @var string
     */
    public $busName;

    /**
     * The unique identifier for the bus.
     *
     * @var string
     */
    public $busNumber;

    /**
     * The stop or station from which the bus departs.
     *
     * @var BusStation|BusStop
     */
    public $departureBusStop;

}