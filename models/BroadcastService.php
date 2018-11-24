<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A delivery service through which content is provided via broadcast over the air
 * or online.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BroadcastService
 */
class BroadcastService extends Service {
    /**
     * The media network(s) whose content is broadcast on this station.
     *
     * @var Organization
     */
    public $broadcastAffiliateOf;

    /**
     * The name displayed in the channel guide. For many US affiliates, it is the
     * network name.
     *
     * @var string
     */
    public $broadcastDisplayName;

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges
     * e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and
     * FM radio channels, e.g. "87 FM".
     *
     * @var BroadcastFrequencySpecification|string
     */
    public $broadcastFrequency;

    /**
     * The timezone in ISO 8601 format for which the service bases its broadcasts
     *
     * @var string
     */
    public $broadcastTimezone;

    /**
     * The organization owning or operating the broadcast service.
     *
     * @var Organization
     */
    public $broadcaster;

    /**
     * A broadcast channel of a broadcast service. Inverse property:
     * providesBroadcastService.
     *
     * @var BroadcastChannel
     */
    public $hasBroadcastChannel;

    /**
     * A broadcast service to which the broadcast service may belong to such as
     * regional variations of a national channel.
     *
     * @var BroadcastService
     */
    public $parentService;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     * @var string
     */
    public $videoFormat;

}