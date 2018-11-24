<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A private parcel service as the delivery mode available for a certain offer.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ParcelService
 */
class ParcelService extends DeliveryMethod {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}