<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for AskAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AskAction
 */
class AskAction extends CommunicateAction {
	/**
	* @var Question A sub property of object. A question.
	*/
	public $question;

}