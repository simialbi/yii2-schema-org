<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A range of of services that will be provided to a customer free of charge in
 * case of a defect or malfunction of a product.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/WarrantyScope
 */
class WarrantyScope extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}