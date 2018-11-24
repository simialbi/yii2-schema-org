<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A single item within a larger data feed.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DataFeedItem
 */
class DataFeedItem extends Intangible {
    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @var string
     */
    public $dateCreated;

    /**
     * The datetime the item was removed from the DataFeed.
     *
     * @var string
     */
    public $dateDeleted;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's
     * entry was modified within a DataFeed.
     *
     * @var string
     */
    public $dateModified;

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a
     * list of 'artists')’.
     *
     * @var Thing
     */
    public $item;


}