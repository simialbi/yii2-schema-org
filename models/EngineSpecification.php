<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Information about the engine of the vehicle. A vehicle can have multiple engines
 * represented by multiple engine specification entities.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EngineSpecification
 */
class EngineSpecification extends StructuredValue {
    /**
     * The volume swept by all of the pistons inside the cylinders of an internal
     * combustion engine in a single movement. 
     * 
     * Typical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic
     * inches
     * * Note 1: You can link to information about how the given value has been
     * determined using the valueReference property.
     * * Note 2: You can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $engineDisplacement;

    /**
     * The power of the vehicle's engine.
     *     Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for
     * metric horsepower (PS, with 1 PS = 735,49875 W)
     * 
     * 
     * Note 1: There are many different ways of measuring an engine's power. For an
     * overview, see  http://en.wikipedia.org/wiki/Horsepower#Enginepowertest_codes.
     * Note 2: You can link to information about how the given value has been
     * determined using the valueReference property.
     * Note 3: You can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $enginePower;

    /**
     * The type of engine or engines powering the vehicle.
     *
     * @var QualitativeValue|string
     */
    public $engineType;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the
     * vehicle has only one engine, this property can be attached directly to the
     * vehicle.
     *
     * @var QualitativeValue|string
     */
    public $fuelType;

    /**
     * The torque (turning force) of the vehicle's engine.
     * 
     * Typical unit code(s): NU for newton metre (N m), F17 for pound-force per foot,
     * or F48 for pound-force per inch
     * 
     * 
     * Note 1: You can link to information about how the given value has been
     * determined (e.g. reference RPM) using the valueReference property.
     * Note 2: You can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $torque;


}