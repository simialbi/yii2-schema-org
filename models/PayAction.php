<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PayAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PayAction
 */
class PayAction extends TradeAction {
	/**
	* @var MedicalDevicePurpose|Thing A goal towards an action is taken. Can be concrete or abstract.
	*/
	public $purpose;

	/**
	* @var Audience|ContactPoint|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}