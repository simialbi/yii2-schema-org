<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for InsertAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InsertAction
 */
class InsertAction extends AddAction {
	/**
	* @var Place A sub property of location. The final location of the object or the agent after the action.
	*/
	public $toLocation;

}