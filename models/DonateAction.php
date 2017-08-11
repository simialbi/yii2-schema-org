<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for DonateAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DonateAction
 */
class DonateAction extends TradeAction {
	/**
	* @var Audience|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}