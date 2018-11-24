<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Indicates whether this game is multi-player, co-op or single-player.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GamePlayMode
 */
class GamePlayMode extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}