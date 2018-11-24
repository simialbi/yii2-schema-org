<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of asking someone to attend an event. Reciprocal of RsvpAction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InviteAction
 */
class InviteAction extends CommunicateAction {
    /**
     * Upcoming or past event associated with this place, organization, or action.
     * Supersedes events.
     *
     * @var Event
     */
    public $event;

}