<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of achieving victory in a competitive activity.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/WinAction
 */
class WinAction extends AchieveAction {
    /**
     * A sub property of participant. The loser of the action.
     *
     * @var Person
     */
    public $loser;


}