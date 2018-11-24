<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A car is a wheeled, self-powered motor vehicle used for transportation.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Car
 */
class Car extends Vehicle {
    /**
     * The ACRISS Car Classification Code is a code used by many car rental companies,
     * for classifying vehicles. ACRISS stands for Association of Car Rental Industry
     * Systems and Standards.
     *
     * @var string
     */
    public $acrissCode;

    /**
     * The permitted total weight of cargo and installations (e.g. a roof rack) on top
     * of the vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * 
     * Note 1: You can indicate additional information in the name of the
     * QuantitativeValue node.
     * Note 2: You may also link to a QualitativeValue node that provides additional
     * information using valueReference
     * Note 3: Note that you can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $roofLoad;


}