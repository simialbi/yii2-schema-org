<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for AssignAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AssignAction
 */
class AssignAction extends AllocateAction {
	/**
	* @var MedicalDevicePurpose|Thing A goal towards an action is taken. Can be concrete or abstract.
	*/
	public $purpose;

}