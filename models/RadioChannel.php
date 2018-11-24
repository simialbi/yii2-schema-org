<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A unique instance of a radio BroadcastService on a CableOrSatelliteService
 * lineup.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RadioChannel
 */
class RadioChannel extends BroadcastChannel {
    /**
     * The unique address by which the BroadcastService can be identified in a provider
     * lineup. In US, this is typically a number.
     *
     * @var string
     */
    public $broadcastChannelId;

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges
     * e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and
     * FM radio channels, e.g. "87 FM".
     *
     * @var BroadcastFrequencySpecification|string
     */
    public $broadcastFrequency;

    /**
     * The type of service required to have access to the channel (e.g. Standard or
     * Premium).
     *
     * @var string
     */
    public $broadcastServiceTier;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @var string
     */
    public $genre;

    /**
     * The CableOrSatelliteService offering the channel.
     *
     * @var CableOrSatelliteService
     */
    public $inBroadcastLineup;

    /**
     * The BroadcastService offered on this channel. Inverse property:
     * hasBroadcastChannel.
     *
     * @var BroadcastService
     */
    public $providesBroadcastService;


}