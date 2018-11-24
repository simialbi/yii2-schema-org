<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A publication event e.g. catch-up TV or radio podcast, during which a program is
 * available on-demand.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OnDemandEvent
 */
class OnDemandEvent extends PublicationEvent {
    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * Supersedes free.
     *
     * @var boolean
     */
    public $isAccessibleForFree;

    /**
     * An agent associated with the publication event.
     *
     * @var Organization|Person
     */
    public $publishedBy;

    /**
     * A broadcast service associated with the publication event.
     *
     * @var BroadcastService
     */
    public $publishedOn;


}