<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PublicationEvent
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PublicationEvent
 */
class PublicationEvent extends Event {
	/**
	* @var boolean A flag to signal that the publication is accessible for free. Supersedes free.
	*/
	public $isAccessibleForFree;

	/**
	* @var BroadcastService A broadcast service associated with the publication event.
	*/
	public $publishedOn;

}