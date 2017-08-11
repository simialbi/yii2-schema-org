<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ScheduleAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ScheduleAction
 */
class ScheduleAction extends PlanAction {
	/**
	* @var string The time the object is scheduled to.
	*/
	public $scheduledTime;

}