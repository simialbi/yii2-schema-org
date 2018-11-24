<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of being defeated in a competitive activity.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LoseAction
 */
class LoseAction extends AchieveAction {
    /**
     * A sub property of participant. The winner of the action.
     *
     * @var Person
     */
    public $winner;


}