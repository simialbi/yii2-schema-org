<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of notifying someone of information pertinent to them, with no
 * expectation of a response.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InformAction
 */
class InformAction extends CommunicateAction {
    /**
     * Upcoming or past event associated with this place, organization, or action.
     * Supersedes events.
     *
     * @var Event
     */
    public $event;


}