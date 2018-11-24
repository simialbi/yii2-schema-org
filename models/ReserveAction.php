<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Reserving a concrete object.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReserveAction
 */
class ReserveAction extends PlanAction {
    /**
     * The time the object is scheduled to.
     *
     * @var string
     */
    public $scheduledTime;

}