<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of returning to the origin that which was previously received (concrete
 * objects) or taken (ownership).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReturnAction
 */
class ReturnAction extends TransferAction {
    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $recipient;


}