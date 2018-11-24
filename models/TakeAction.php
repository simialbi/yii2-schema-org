<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of gaining ownership of an object from an origin. Reciprocal of
 * GiveAction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TakeAction
 */
class TakeAction extends TransferAction {
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