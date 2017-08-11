<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Corporation
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Corporation
 */
class Corporation extends Organization {
	/**
	* @var string The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated by a space character. For the exchange component of the tickerSymbol attribute, we reccommend using the controlled vocaulary of Market Identifier Codes (MIC) specified in ISO15022.
	*/
	public $tickerSymbol;

}