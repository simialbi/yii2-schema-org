<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for CheckOutAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CheckOutAction
 */
class CheckOutAction extends CommunicateAction {
	/**
	* @var Thing The subject matter of the content.
	*/
	public $about;

	/**
	* @var Language|string The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard. See also availableLanguage. Supersedes language.
	*/
	public $inLanguage;

	/**
	* @var Audience|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}