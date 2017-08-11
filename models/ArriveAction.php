<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ArriveAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ArriveAction
 */
class ArriveAction extends MoveAction {
	/**
	* @var Place A sub property of location. The original location of the object or the agent before the action.
	*/
	public $fromLocation;

	/**
	* @var Place A sub property of location. The final location of the object or the agent after the action.
	*/
	public $toLocation;

}