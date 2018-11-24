<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of transferring/moving (abstract or concrete) animate or inanimate
 * objects from one place to another.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TransferAction
 */
class TransferAction extends Action {
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