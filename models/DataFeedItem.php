<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for DataFeedItem
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DataFeedItem
 */
class DataFeedItem extends Intangible {
	/**
	* @var string The date on which the CreativeWork was created or the item was added to a DataFeed.
	*/
	public $dateCreated;

	/**
	* @var string The datetime the item was removed from the DataFeed.
	*/
	public $dateDeleted;

	/**
	* @var string The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
	*/
	public $dateModified;

	/**
	* @var Thing An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
	*/
	public $item;

}