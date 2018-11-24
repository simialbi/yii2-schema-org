<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Scheduling future actions, events, or tasks.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ScheduleAction
 */
class ScheduleAction extends PlanAction {
    /**
     * The time the object is scheduled to.
     *
     * @var string
     */
    public $scheduledTime;

}