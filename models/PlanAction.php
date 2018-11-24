<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of planning the execution of an event/task/action/reservation/plan to a
 * future date.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PlanAction
 */
class PlanAction extends OrganizeAction {
    /**
     * The time the object is scheduled to.
     *
     * @var string
     */
    public $scheduledTime;


}