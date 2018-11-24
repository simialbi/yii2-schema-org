<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of notifying someone that a future event/action is going to happen as
 * expected.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ConfirmAction
 */
class ConfirmAction extends InformAction {
    /**
     * Upcoming or past event associated with this place, organization, or action.
     * Supersedes events.
     *
     * @var Event
     */
    public $event;

}