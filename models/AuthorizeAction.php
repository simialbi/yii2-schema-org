<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of granting permission to an object.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AuthorizeAction
 */
class AuthorizeAction extends AllocateAction {
    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $recipient;


}