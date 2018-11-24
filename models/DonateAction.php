<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of providing goods, services, or money without compensation, often for
 * philanthropic reasons.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DonateAction
 */
class DonateAction extends TradeAction {
    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $recipient;


}