<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for EndorseAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EndorseAction
 */
class EndorseAction extends ReactAction {
	/**
	* @var Organization|Person A sub property of participant. The person/organization being supported.
	*/
	public $endorsee;

}