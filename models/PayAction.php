<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An agent pays a price to a participant.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PayAction
 */
class PayAction extends TradeAction {
    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var MedicalDevicePurpose|Thing
     */
    public $purpose;

    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $recipient;


}