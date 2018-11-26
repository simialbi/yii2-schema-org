<?php

namespace tests\schemas\traits;

/**
 * A vehicle is a device that is designed or used to transport people or cargo
 * over land, water, air, or through space.
 *
 * @property $vehicleSpecialUsage
 * @property $numberOfForwardGears
 * @property $mileageFromOdometer
 * @property $cargoVolume
 * @property $vehicleInteriorColor
 * @property $steeringPosition
 * @property $vehicleSeatingCapacity
 * @property $vehicleEngine
 * @property $vehicleModelDate
 * @property $numberOfDoors
 * @property $vehicleConfiguration
 * @property $fuelType
 * @property $vehicleIdentificationNumber
 * @property $fuelConsumption
 * @property $numberOfPreviousOwners
 * @property $fuelEfficiency
 * @property $numberOfAxles
 * @property $vehicleInteriorType
 * @property $numberOfAirbags
 * @property $vehicleTransmission
 * @property $dateVehicleFirstRegistered
 * @property $purchaseDate
 * @property $productionDate
 * @property $knownVehicleDamages
 * @property $driveWheelConfiguration
 * @property $fuelCapacity
 * @property $seatingCapacity
 * @property $emissionsCO2
 * @property $accelerationTime
 * @property $wheelbase
 * @property $weightTotal
 * @property $bodyType
 * @property $trailerWeight
 * @property $tongueWeight
 * @property $meetsEmissionStandard
 * @property $modelDate
 * @property $payload
 * @property $speed
 *
 * @see http://schema.org/Vehicle
 */
trait VehicleTrait
{

    /**
     * @see http://schema.org/Product
     */
    use ProductTrait;

    /**
     * Indicates whether the vehicle has been used for special purposes, like
     * commercial rental, driving school, or as a taxi. The legislation in many
     * countries requires this information to be revealed when offering a car for
     * sale.
     *
     * @var string
     * @see http://schema.org/vehicleSpecialUsage
     */
    public $vehicleSpecialUsage;

    /**
     * The total number of forward gears available for the transmission system of
     * the vehicle.
     * 
     * Typical unit code(s): C62
     *
     * @var number|QuantitativeValue
     * @see http://schema.org/numberOfForwardGears
     */
    public $numberOfForwardGears;

    /**
     * The total distance travelled by the particular vehicle since its initial
     * production, as read from its odometer.
     * 
     * Typical unit code(s): KMT for kilometers, SMI for statute miles
     *
     * @var QuantitativeValue
     * @see http://schema.org/mileageFromOdometer
     */
    public $mileageFromOdometer;

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually
     * the trunk volume.
     * 
     * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet
     * 
     * Note: You can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     * @see http://schema.org/cargoVolume
     */
    public $cargoVolume;

    /**
     * The color or color combination of the interior of the vehicle.
     *
     * @var string
     * @see http://schema.org/vehicleInteriorColor
     */
    public $vehicleInteriorColor;

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     *
     * @var SteeringPositionValue
     * @see http://schema.org/steeringPosition
     */
    public $steeringPosition;

    /**
     * The number of passengers that can be seated in the vehicle, both in terms
     * of the physical space available, and in terms of limitations set by law.
     * 
     * Typical unit code(s): C62 for persons.
     *
     * @var QuantitativeValue|number
     * @see http://schema.org/vehicleSeatingCapacity
     */
    public $vehicleSeatingCapacity;

    /**
     * Information about the engine or engines of the vehicle.
     *
     * @var EngineSpecification
     * @see http://schema.org/vehicleEngine
     */
    public $vehicleEngine;

    /**
     * The release date of a vehicle model (often used to differentiate versions
     * of the same make and model).
     *
     * @var string
     * @see http://schema.org/vehicleModelDate
     */
    public $vehicleModelDate;

    /**
     * The number of doors.
     * 
     * Typical unit code(s): C62
     *
     * @var number|QuantitativeValue
     * @see http://schema.org/numberOfDoors
     */
    public $numberOfDoors;

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr
     * hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     *
     * @var string
     * @see http://schema.org/vehicleConfiguration
     */
    public $vehicleConfiguration;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the
     * vehicle has only one engine, this property can be attached directly to the
     * vehicle.
     *
     * @var string|QualitativeValue|string
     * @see http://schema.org/fuelType
     */
    public $fuelType;

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by
     * the automotive industry to identify individual motor vehicles.
     *
     * @var string
     * @see http://schema.org/vehicleIdentificationNumber
     */
    public $vehicleIdentificationNumber;

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal
     * duration with the given vehicle (e.g. liters per 100 km).
     * 
     * 
     * Note 1: There are unfortunately no standard unit codes for liters per 100
     * km.  Use unitText to indicate the unit of measurement, e.g. L/100 km.
     * Note 2: There are two ways of indicating the fuel consumption,
     * fuelConsumption (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30
     * miles per gallon). They are reciprocal.
     * Note 3: Often, the absolute value is useful only when related to driving
     * speed ("at 80 km/h") or usage pattern ("city traffic"). You can use
     * valueReference to link the value for the fuel consumption to another value.
     * 
     * 
     *
     * @var QuantitativeValue
     * @see http://schema.org/fuelConsumption
     */
    public $fuelConsumption;

    /**
     * The number of owners of the vehicle, including the current one.
     * 
     * Typical unit code(s): C62
     *
     * @var QuantitativeValue|number
     * @see http://schema.org/numberOfPreviousOwners
     */
    public $numberOfPreviousOwners;

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon
     * (mpg) or kilometers per liter (km/L).
     * 
     * 
     * Note 1: There are unfortunately no standard unit codes for miles per gallon
     * or kilometers per liter. Use unitText to indicate the unit of measurement,
     * e.g. mpg or km/L.
     * Note 2: There are two ways of indicating the fuel consumption,
     * fuelConsumption (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30
     * miles per gallon). They are reciprocal.
     * Note 3: Often, the absolute value is useful only when related to driving
     * speed ("at 80 km/h") or usage pattern ("city traffic"). You can use
     * valueReference to link the value for the fuel economy to another value.
     * 
     * 
     *
     * @var QuantitativeValue
     * @see http://schema.org/fuelEfficiency
     */
    public $fuelEfficiency;

    /**
     * The number of axles.
     * 
     * Typical unit code(s): C62
     *
     * @var QuantitativeValue|number
     * @see http://schema.org/numberOfAxles
     */
    public $numberOfAxles;

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric,
     * leather, wood, etc.). While most interior types are characterized by the
     * material used, an interior type can also be based on vehicle usage or
     * target audience.
     *
     * @var string
     * @see http://schema.org/vehicleInteriorType
     */
    public $vehicleInteriorType;

    /**
     * The number or type of airbags in the vehicle.
     *
     * @var number|string
     * @see http://schema.org/numberOfAirbags
     */
    public $numberOfAirbags;

    /**
     * The type of component used for transmitting the power from a rotating power
     * source to the wheels or other relevant component(s) ("gearbox" for cars).
     *
     * @var QualitativeValue|string|string
     * @see http://schema.org/vehicleTransmission
     */
    public $vehicleTransmission;

    /**
     * The date of the first registration of the vehicle with the respective
     * public authorities.
     *
     * @var string
     * @see http://schema.org/dateVehicleFirstRegistered
     */
    public $dateVehicleFirstRegistered;

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     * @var string
     * @see http://schema.org/purchaseDate
     */
    public $purchaseDate;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @var string
     * @see http://schema.org/productionDate
     */
    public $productionDate;

    /**
     * A textual description of known damages, both repaired and unrepaired.
     *
     * @var string
     * @see http://schema.org/knownVehicleDamages
     */
    public $knownVehicleDamages;

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque
     * from the vehicle's engine via the drivetrain.
     *
     * @var DriveWheelConfigurationValue|string
     * @see http://schema.org/driveWheelConfiguration
     */
    public $driveWheelConfiguration;

    /**
     * The capacity of the fuel tank or in the case of electric cars, the battery.
     * If there are multiple components for storage, this should indicate the
     * total of all storage of the same type.
     * 
     * Typical unit code(s): LTR for liters, GLL of US gallons, GLI for UK /
     * imperial gallons, AMH for ampere-hours (for electrical vehicles).
     *
     * @var QuantitativeValue
     * @see http://schema.org/fuelCapacity
     */
    public $fuelCapacity;

    /**
     * The number of persons that can be seated (e.g. in a vehicle), both in terms
     * of the physical space available, and in terms of limitations set by law.
     * 
     * Typical unit code(s): C62 for persons
     *
     * @var QuantitativeValue|number
     * @see http://schema.org/seatingCapacity
     */
    public $seatingCapacity;

    /**
     * The CO2 emissions in g/km. When used in combination with a
     * QuantitativeValue, put "g/km" into the unitText property of that value,
     * since there is no UN/CEFACT Common Code for "g/km".
     *
     * @var number
     * @see http://schema.org/emissionsCO2
     */
    public $emissionsCO2;

    /**
     * The time needed to accelerate the vehicle from a given start velocity to a
     * given target velocity.
     * 
     * Typical unit code(s): SEC for seconds
     * 
     * 
     * Note: There are unfortunately no standard unit codes for seconds/0..100
     * km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the
     * velocities in the name of the QuantitativeValue, or use valueReference with
     * a QuantitativeValue of 0..60 mph or 0..100 km/h to specify the reference
     * speeds.
     * 
     * 
     *
     * @var QuantitativeValue
     * @see http://schema.org/accelerationTime
     */
    public $accelerationTime;

    /**
     * The distance between the centers of the front and rear wheels.
     * 
     * Typical unit code(s): CMT for centimeters, MTR for meters, INH for inches,
     * FOT for foot/feet
     *
     * @var QuantitativeValue
     * @see http://schema.org/wheelbase
     */
    public $wheelbase;

    /**
     * The permitted total weight of the loaded vehicle, including passengers and
     * cargo and the weight of the empty vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * 
     * Note 1: You can indicate additional information in the name of the
     * QuantitativeValue node.
     * Note 2: You may also link to a QualitativeValue node that provides
     * additional information using valueReference.
     * Note 3: Note that you can use minValue and maxValue to indicate ranges.
     * 
     * 
     *
     * @var QuantitativeValue
     * @see http://schema.org/weightTotal
     */
    public $weightTotal;

    /**
     * Indicates the design and body style of the vehicle (e.g. station wagon,
     * hatchback, etc.).
     *
     * @var string|string|QualitativeValue
     * @see http://schema.org/bodyType
     */
    public $bodyType;

    /**
     * The permitted weight of a trailer attached to the vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * * Note 1: You can indicate additional information in the name of the
     * QuantitativeValue node.
     * * Note 2: You may also link to a QualitativeValue node that provides
     * additional information using valueReference.
     * * Note 3: Note that you can use minValue and maxValue to indicate ranges.
     *
     * @var QuantitativeValue
     * @see http://schema.org/trailerWeight
     */
    public $trailerWeight;

    /**
     * The permitted vertical load (TWR) of a trailer attached to the vehicle.
     * Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR)
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * 
     * Note 1: You can indicate additional information in the name of the
     * QuantitativeValue node.
     * Note 2: You may also link to a QualitativeValue node that provides
     * additional information using valueReference.
     * Note 3: Note that you can use minValue and maxValue to indicate ranges.
     * 
     * 
     *
     * @var QuantitativeValue
     * @see http://schema.org/tongueWeight
     */
    public $tongueWeight;

    /**
     * Indicates that the vehicle meets the respective emission standard.
     *
     * @var string|string|QualitativeValue
     * @see http://schema.org/meetsEmissionStandard
     */
    public $meetsEmissionStandard;

    /**
     * The release date of a vehicle model (often used to differentiate versions
     * of the same make and model).
     *
     * @var string
     * @see http://schema.org/modelDate
     */
    public $modelDate;

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the
     * empty vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * 
     * Note 1: Many databases specify the permitted TOTAL weight instead, which is
     * the sum of weight and payload
     * Note 2: You can indicate additional information in the name of the
     * QuantitativeValue node.
     * Note 3: You may also link to a QualitativeValue node that provides
     * additional information using valueReference.
     * Note 4: Note that you can use minValue and maxValue to indicate ranges.
     * 
     * 
     *
     * @var QuantitativeValue
     * @see http://schema.org/payload
     */
    public $payload;

    /**
     * The speed range of the vehicle. If the vehicle is powered by an engine, the
     * upper limit of the speed range (indicated by maxValue should be the maximum
     * speed achievable under regular conditions.
     * 
     * Typical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s),
     * KNT for knot
     * 
     * *Note 1: Use minValue and maxValue to indicate the range. Typically, the
     * minimal value is zero.
     * * Note 2: There are many different ways of measuring the speed range. You
     * can link to information about how the given value has been determined using
     * the valueReference property.
     *
     * @var QuantitativeValue
     * @see http://schema.org/speed
     */
    public $speed;

}
