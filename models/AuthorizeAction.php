<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for AuthorizeAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AuthorizeAction
 */
class AuthorizeAction extends AllocateAction {
	/**
	* @var Audience|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}