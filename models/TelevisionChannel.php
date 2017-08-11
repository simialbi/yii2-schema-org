<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for TelevisionChannel
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TelevisionChannel
 */
class TelevisionChannel extends BroadcastChannel {
	/**
	* @var string The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
	*/
	public $broadcastChannelId;

	/**
	* @var string The type of service required to have access to the channel (e.g. Standard or Premium).
	*/
	public $broadcastServiceTier;

	/**
	* @var string Genre of the creative work, broadcast channel or group.
	*/
	public $genre;

	/**
	* @var CableOrSatelliteService The CableOrSatelliteService offering the channel.
	*/
	public $inBroadcastLineup;

	/**
	* @var BroadcastService The BroadcastService offered on this channel.
	*/
	public $providesBroadcastService;

}