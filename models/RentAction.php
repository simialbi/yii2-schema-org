<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for RentAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RentAction
 */
class RentAction extends TradeAction {
	/**
	* @var Organization|Person A sub property of participant. The owner of the real estate property.
	*/
	public $landlord;

	/**
	* @var RealEstateAgent A sub property of participant. The real estate agent involved in the action.
	*/
	public $realEstateAgent;

}