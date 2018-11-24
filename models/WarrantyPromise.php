<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A structured value representing the duration and scope of services that will be
 * provided to a customer free of charge in case of a defect or malfunction of a
 * product.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/WarrantyPromise
 */
class WarrantyPromise extends StructuredValue {
    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year,
     * MON for months, or DAY for days.
     *
     * @var QuantitativeValue
     */
    public $durationOfWarranty;

    /**
     * The scope of the warranty promise.
     *
     * @var WarrantyScope
     */
    public $warrantyScope;


}