<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of physically/electronically taking delivery of an object thathas been
 * transferred from an origin to a destination. Reciprocal of SendAction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReceiveAction
 */
class ReceiveAction extends TransferAction {
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @var DeliveryMethod
     */
    public $deliveryMethod;

    /**
     * A sub property of participant. The participant who is at the sending end of the
     * action.
     *
     * @var Audience|Organization|Person
     */
    public $sender;

}