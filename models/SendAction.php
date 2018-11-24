<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of physically/electronically dispatching an object for transfer from an
 * origin to a destination.Related actions:
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SendAction
 */
class SendAction extends TransferAction {
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @var DeliveryMethod
     */
    public $deliveryMethod;

    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $recipient;


}