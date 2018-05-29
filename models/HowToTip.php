<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for HowToTip
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowToTip
 */
class HowToTip extends ListItem {
	/**
	* @var Thing An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
	*/
	public $item;

	/**
	* @var ListItem A link to the ListItem that follows the current one.
	*/
	public $nextItem;

	/**
	* @var integer|string The position of an item in a series or sequence of items.
	*/
	public $position;

	/**
	* @var ListItem A link to the ListItem that preceeds the current one.
	*/
	public $previousItem;

}