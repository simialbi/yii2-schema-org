<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An agent tracks an object for updates.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TrackAction
 */
class TrackAction extends FindAction {
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @var DeliveryMethod
     */
    public $deliveryMethod;


}