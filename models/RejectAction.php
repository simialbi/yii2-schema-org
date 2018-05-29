<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for RejectAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RejectAction
 */
class RejectAction extends AllocateAction {
	/**
	* @var MedicalDevicePurpose|Thing A goal towards an action is taken. Can be concrete or abstract.
	*/
	public $purpose;

}