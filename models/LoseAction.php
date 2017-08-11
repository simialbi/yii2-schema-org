<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for LoseAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LoseAction
 */
class LoseAction extends AchieveAction {
	/**
	* @var Person A sub property of participant. The winner of the action.
	*/
	public $winner;

}