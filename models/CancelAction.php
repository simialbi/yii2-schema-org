<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of asserting that a future event/action is no longer going to happen.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CancelAction
 */
class CancelAction extends PlanAction {
    /**
     * The time the object is scheduled to.
     *
     * @var string
     */
    public $scheduledTime;


}