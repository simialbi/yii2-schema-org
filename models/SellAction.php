<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for SellAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SellAction
 */
class SellAction extends TradeAction {
	/**
	* @var Person A sub property of participant. The participant/person/organization that bought the object.
	*/
	public $buyer;

}