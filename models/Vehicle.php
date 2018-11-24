<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A vehicle is a device that is designed or used to transport people or cargo over
 * land, water, air, or through space.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Vehicle
 */
class Vehicle extends Product {
    /**
     * The time needed to accelerate the vehicle from a given start velocity to a given
     * target velocity.
     * 
     * Typical unit code(s): SEC for seconds
     * 
     * 
     * Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or
     * seconds/0..60 mph. Simply use "SEC" for seconds and indicate the velocities in
     * the name of the QuantitativeValue, or use valueReference with a
     * QuantitativeValue of 0..60 mph or 0..100 km/h to specify the reference speeds.
     *
     * @var QuantitativeValue
     */
    public $accelerationTime;

    /**
     * Indicates the design and body style of the vehicle (e.g. station wagon,
     * hatchback, etc.).
     *
     * @var QualitativeValue|string
     */
    public $bodyType;

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually the
     * trunk volume.
     * 
     * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet
     * 
     * Note: You can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $cargoVolume;

    /**
     * The date of the first registration of the vehicle with the respective public
     * authorities.
     *
     * @var string
     */
    public $dateVehicleFirstRegistered;

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque from
     * the vehicle's engine via the drivetrain.
     *
     * @var DriveWheelConfigurationValue|string
     */
    public $driveWheelConfiguration;

    /**
     * The CO2 emissions in g/km. When used in combination with a QuantitativeValue,
     * put "g/km" into the unitText property of that value, since there is no UN/CEFACT
     * Common Code for "g/km".
     *
     * @var integer
     */
    public $emissionsCO2;

    /**
     * The capacity of the fuel tank or in the case of electric cars, the battery. If
     * there are multiple components for storage, this should indicate the total of all
     * storage of the same type.
     * 
     * Typical unit code(s): LTR for liters, GLL of US gallons, GLI for UK / imperial
     * gallons, AMH for ampere-hours (for electrical vehicles).
     *
     * @var QuantitativeValue
     */
    public $fuelCapacity;

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal
     * duration with the given vehicle (e.g. liters per 100 km).
     * 
     * 
     * Note 1: There are unfortunately no standard unit codes for liters per 100 km. 
     * Use unitText to indicate the unit of measurement, e.g. L/100 km.
     * Note 2: There are two ways of indicating the fuel consumption, fuelConsumption
     * (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30 miles per gallon). They
     * are reciprocal.
     * Note 3: Often, the absolute value is useful only when related to driving speed
     * ("at 80 km/h") or usage pattern ("city traffic"). You can use valueReference to
     * link the value for the fuel consumption to another value.
     *
     * @var QuantitativeValue
     */
    public $fuelConsumption;

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon
     * (mpg) or kilometers per liter (km/L).
     * 
     * 
     * Note 1: There are unfortunately no standard unit codes for miles per gallon or
     * kilometers per liter. Use unitText to indicate the unit of measurement, e.g. mpg
     * or km/L.
     * Note 2: There are two ways of indicating the fuel consumption, fuelConsumption
     * (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30 miles per gallon). They
     * are reciprocal.
     * Note 3: Often, the absolute value is useful only when related to driving speed
     * ("at 80 km/h") or usage pattern ("city traffic"). You can use valueReference to
     * link the value for the fuel economy to another value.
     *
     * @var QuantitativeValue
     */
    public $fuelEfficiency;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the
     * vehicle has only one engine, this property can be attached directly to the
     * vehicle.
     *
     * @var QualitativeValue|string
     */
    public $fuelType;

    /**
     * A textual description of known damages, both repaired and unrepaired.
     *
     * @var string
     */
    public $knownVehicleDamages;

    /**
     * Indicates that the vehicle meets the respective emission standard.
     *
     * @var QualitativeValue|string
     */
    public $meetsEmissionStandard;

    /**
     * The total distance travelled by the particular vehicle since its initial
     * production, as read from its odometer.
     * 
     * Typical unit code(s): KMT for kilometers, SMI for statute miles
     *
     * @var QuantitativeValue
     */
    public $mileageFromOdometer;

    /**
     * The release date of a vehicle model (often used to differentiate versions of the
     * same make and model).
     *
     * @var string
     */
    public $modelDate;

    /**
     * The number or type of airbags in the vehicle.
     *
     * @var integer|string
     */
    public $numberOfAirbags;

    /**
     * The number of axles.
     * 
     * Typical unit code(s): C62
     *
     * @var integer|QuantitativeValue
     */
    public $numberOfAxles;

    /**
     * The number of doors.
     * 
     * Typical unit code(s): C62
     *
     * @var integer|QuantitativeValue
     */
    public $numberOfDoors;

    /**
     * The total number of forward gears available for the transmission system of the
     * vehicle.
     * 
     * Typical unit code(s): C62
     *
     * @var integer|QuantitativeValue
     */
    public $numberOfForwardGears;

    /**
     * The number of owners of the vehicle, including the current one.
     * 
     * Typical unit code(s): C62
     *
     * @var integer|QuantitativeValue
     */
    public $numberOfPreviousOwners;

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty
     * vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * 
     * Note 1: Many databases specify the permitted TOTAL weight instead, which is the
     * sum of weight and payload
     * Note 2: You can indicate additional information in the name of the
     * QuantitativeValue node.
     * Note 3: You may also link to a QualitativeValue node that provides additional
     * information using valueReference.
     * Note 4: Note that you can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $payload;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @var string
     */
    public $productionDate;

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     * @var string
     */
    public $purchaseDate;

    /**
     * The number of persons that can be seated (e.g. in a vehicle), both in terms of
     * the physical space available, and in terms of limitations set by law.
     * 
     * Typical unit code(s): C62 for persons
     *
     * @var integer|QuantitativeValue
     */
    public $seatingCapacity;

    /**
     * The speed range of the vehicle. If the vehicle is powered by an engine, the
     * upper limit of the speed range (indicated by maxValue should be the maximum
     * speed achievable under regular conditions.
     * 
     * Typical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s), KNT for
     * knot
     * 
     * *Note 1: Use minValue and maxValue to indicate the range. Typically, the minimal
     * value is zero.
     * * Note 2: There are many different ways of measuring the speed range. You can
     * link to information about how the given value has been determined using the
     * valueReference property.
     *
     * @var QuantitativeValue
     */
    public $speed;

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     *
     * @var SteeringPositionValue
     */
    public $steeringPosition;

    /**
     * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also
     * referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR)
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * 
     * Note 1: You can indicate additional information in the name of the
     * QuantitativeValue node.
     * Note 2: You may also link to a QualitativeValue node that provides additional
     * information using valueReference.
     * Note 3: Note that you can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $tongueWeight;

    /**
     * The permitted weight of a trailer attached to the vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * * Note 1: You can indicate additional information in the name of the
     * QuantitativeValue node.
     * * Note 2: You may also link to a QualitativeValue node that provides additional
     * information using valueReference.
     * * Note 3: Note that you can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $trailerWeight;

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST
     * 2.5 MT 225 hp' or 'limited edition'.
     *
     * @var string
     */
    public $vehicleConfiguration;

    /**
     * Information about the engine or engines of the vehicle.
     *
     * @var EngineSpecification
     */
    public $vehicleEngine;

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by the
     * automotive industry to identify individual motor vehicles.
     *
     * @var string
     */
    public $vehicleIdentificationNumber;

    /**
     * The color or color combination of the interior of the vehicle.
     *
     * @var string
     */
    public $vehicleInteriorColor;

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric,
     * leather, wood, etc.). While most interior types are characterized by the
     * material used, an interior type can also be based on vehicle usage or target
     * audience.
     *
     * @var string
     */
    public $vehicleInteriorType;

    /**
     * The release date of a vehicle model (often used to differentiate versions of the
     * same make and model).
     *
     * @var string
     */
    public $vehicleModelDate;

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of the
     * physical space available, and in terms of limitations set by law.
     * 
     * Typical unit code(s): C62 for persons.
     *
     * @var integer|QuantitativeValue
     */
    public $vehicleSeatingCapacity;

    /**
     * Indicates whether the vehicle has been used for special purposes, like
     * commercial rental, driving school, or as a taxi. The legislation in many
     * countries requires this information to be revealed when offering a car for sale.
     *
     * @var CarUsageType|string
     */
    public $vehicleSpecialUsage;

    /**
     * The type of component used for transmitting the power from a rotating power
     * source to the wheels or other relevant component(s) ("gearbox" for cars).
     *
     * @var QualitativeValue|string
     */
    public $vehicleTransmission;

    /**
     * The permitted total weight of the loaded vehicle, including passengers and cargo
     * and the weight of the empty vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * 
     * Note 1: You can indicate additional information in the name of the
     * QuantitativeValue node.
     * Note 2: You may also link to a QualitativeValue node that provides additional
     * information using valueReference.
     * Note 3: Note that you can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $weightTotal;

    /**
     * The distance between the centers of the front and rear wheels.
     * 
     * Typical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT
     * for foot/feet
     *
     * @var QuantitativeValue
     */
    public $wheelbase;

}