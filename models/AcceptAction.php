<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for AcceptAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AcceptAction
 */
class AcceptAction extends AllocateAction {
	/**
	* @var MedicalDevicePurpose|Thing A goal towards an action is taken. Can be concrete or abstract.
	*/
	public $purpose;

}