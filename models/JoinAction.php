<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An agent joins an event/group with participants/friends at a location.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/JoinAction
 */
class JoinAction extends InteractAction {
    /**
     * Upcoming or past event associated with this place, organization, or action.
     * Supersedes events.
     *
     * @var Event
     */
    public $event;


}