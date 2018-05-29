<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for HowTo
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowTo
 */
class HowTo extends CreativeWork {
	/**
	* @var MonetaryAmount|string The estimated cost of the supply or supplies consumed when performing instructions.
	*/
	public $estimatedCost;

	/**
	* @var Duration The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in ISO 8601 duration format.
	*/
	public $performTime;

	/**
	* @var Duration The length of time it takes to prepare the items to be used in instructions or a direction, in ISO 8601 duration format.
	*/
	public $prepTime;

	/**
	* @var CreativeWork|ItemList|string The steps in the form of a single item (text, document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
	*/
	public $steps;

	/**
	* @var HowToSupply|string A sub-property of instrument. A supply consumed when performing instructions or a direction.
	*/
	public $supply;

	/**
	* @var HowToTool|string A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
	*/
	public $tool;

	/**
	* @var Duration The total time required to perform instructions or a direction (including time to prepare the supplies), in ISO 8601 duration format.
	*/
	public $totalTime;

	/**
	* @var QuantitativeValue|string The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
	*/
	public $yield;

}