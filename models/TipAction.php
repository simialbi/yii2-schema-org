<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of giving money voluntarily to a beneficiary in recognition of services
 * rendered.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TipAction
 */
class TipAction extends TradeAction {
    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $recipient;


}