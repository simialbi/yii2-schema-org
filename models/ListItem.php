<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An list item, e.g. a step in a checklist or how-to description.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ListItem
 */
class ListItem extends Intangible {
    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a
     * list of 'artists')’.
     *
     * @var Thing
     */
    public $item;

    /**
     * A link to the ListItem that follows the current one.
     *
     * @var ListItem
     */
    public $nextItem;

    /**
     * The position of an item in a series or sequence of items.
     *
     * @var integer|string
     */
    public $position;

    /**
     * A link to the ListItem that preceeds the current one.
     *
     * @var ListItem
     */
    public $previousItem;

}