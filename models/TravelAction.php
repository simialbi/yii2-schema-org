<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of traveling from an fromLocation to a destination by a specified mode
 * of transport, optionally with participants.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TravelAction
 */
class TravelAction extends MoveAction {
    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     * @var Distance
     */
    public $distance;

}