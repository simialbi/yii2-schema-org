<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for AppendAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AppendAction
 */
class AppendAction extends InsertAction {
	/**
	* @var Place A sub property of location. The final location of the object or the agent after the action.
	*/
	public $toLocation;

}