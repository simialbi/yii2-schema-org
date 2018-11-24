<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A trip on a commercial train line.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TrainTrip
 */
class TrainTrip extends Trip {
    /**
     * The platform where the train arrives.
     *
     * @var string
     */
    public $arrivalPlatform;

    /**
     * The station where the train trip ends.
     *
     * @var TrainStation
     */
    public $arrivalStation;

    /**
     * The platform from which the train departs.
     *
     * @var string
     */
    public $departurePlatform;

    /**
     * The station from which the train departs.
     *
     * @var TrainStation
     */
    public $departureStation;

    /**
     * The name of the train (e.g. The Orient Express).
     *
     * @var string
     */
    public $trainName;

    /**
     * The unique identifier for the train.
     *
     * @var string
     */
    public $trainNumber;

}