<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An agent leaves an event / group with participants/friends at a location.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LeaveAction
 */
class LeaveAction extends InteractAction {
    /**
     * Upcoming or past event associated with this place, organization, or action.
     * Supersedes events.
     *
     * @var Event
     */
    public $event;

}