<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of transferring ownership of an object to a destination. Reciprocal of
 * TakeAction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GiveAction
 */
class GiveAction extends TransferAction {
    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $recipient;

}