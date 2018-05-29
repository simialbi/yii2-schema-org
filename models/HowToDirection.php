<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for HowToDirection
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowToDirection
 */
class HowToDirection extends ListItem {
	/**
	* @var MediaObject A media object representing the circumstances after performing this direction.
	*/
	public $afterMedia;

	/**
	* @var MediaObject A media object representing the circumstances before performing this direction.
	*/
	public $beforeMedia;

	/**
	* @var MediaObject A media object representing the circumstances while performing this direction.
	*/
	public $duringMedia;

	/**
	* @var Duration The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in ISO 8601 duration format.
	*/
	public $performTime;

	/**
	* @var Duration The length of time it takes to prepare the items to be used in instructions or a direction, in ISO 8601 duration format.
	*/
	public $prepTime;

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

}