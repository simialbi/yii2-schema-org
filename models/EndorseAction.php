<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An agent approves/certifies/likes/supports/sanction an object.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EndorseAction
 */
class EndorseAction extends ReactAction {
    /**
     * A sub property of participant. The person/organization being supported.
     *
     * @var Organization|Person
     */
    public $endorsee;


}