<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A single feed providing structured information about one or more entities or
 * topics.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DataFeed
 */
class DataFeed extends Dataset {
    /**
     * An item within in a data feed. Data feeds may have many elements.
     *
     * @var DataFeedItem|string|Thing
     */
    public $dataFeedElement;


}