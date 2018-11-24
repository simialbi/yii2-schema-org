<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Status of a game server.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GameServerStatus
 */
class GameServerStatus extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}