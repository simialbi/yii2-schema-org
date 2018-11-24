<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of  departing from a place. An agent departs from an fromLocation for a
 * destination, optionally with participants.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DepartAction
 */
class DepartAction extends MoveAction {
    /**
     * A sub property of location. The original location of the object or the agent
     * before the action.
     *
     * @var Place
     */
    public $fromLocation;

    /**
     * A sub property of location. The final location of the object or the agent after
     * the action.
     *
     * @var Place
     */
    public $toLocation;


}