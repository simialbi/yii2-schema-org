<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for TypeAndQuantityNode
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TypeAndQuantityNode
 */
class TypeAndQuantityNode extends StructuredValue {
	/**
	* @var integer The quantity of the goods included in the offer.
	*/
	public $amountOfThisGood;

	/**
	* @var BusinessFunction The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
	*/
	public $businessFunction;

	/**
	* @var Product|Service The product that this structured value is referring to.
	*/
	public $typeOfGood;

	/**
	* @var string The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
	*/
	public $unitCode;

	/**
	* @var string A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
unitCode.
	*/
	public $unitText;

}