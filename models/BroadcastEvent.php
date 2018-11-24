<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An over the air or online broadcast event.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BroadcastEvent
 */
class BroadcastEvent extends PublicationEvent {
    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     *
     * @var Event
     */
    public $broadcastOfEvent;

    /**
     * True is the broadcast is of a live event.
     *
     * @var boolean
     */
    public $isLiveBroadcast;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     * @var string
     */
    public $videoFormat;

}