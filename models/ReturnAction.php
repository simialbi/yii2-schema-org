<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ReturnAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReturnAction
 */
class ReturnAction extends TransferAction {
	/**
	* @var Audience|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}