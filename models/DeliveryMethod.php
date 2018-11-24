<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A delivery method is a standardized procedure for transferring the product or
 * service to the destination of fulfillment chosen by the customer. Delivery
 * methods are characterized by the means of transportation used, and by the
 * organization or group that is the contracting party for the sending organization
 * or person.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DeliveryMethod
 */
class DeliveryMethod extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}