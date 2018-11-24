<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A PublicationEvent corresponds indifferently to the event of publication for a
 * CreativeWork of any type e.g. a broadcast event, an on-demand event, a
 * book/journal publication via a variety of delivery media.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PublicationEvent
 */
class PublicationEvent extends Event {
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