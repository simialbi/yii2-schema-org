<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Vehicle
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Vehicle
 */
class Vehicle extends Product {
	/**
	* @var QuantitativeValue The time needed to accelerate the vehicle from a given start velocity to a given target velocity.
	* 
	* Typical unit code(s): SEC for seconds
	* 
	* Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the velocities in the name of the QuantitativeValue, or use valueReference with a QuantitativeValue of 0..60 mph or 0..100 km/h to specify the reference speeds.
	*/
	public $accelerationTime;

	/**
	* @var QualitativeValue|string Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
	*/
	public $bodyType;

	/**
	* @var QuantitativeValue The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.
	* 
	* Typical unit code(s): LTR for liters, FTQ for cubic foot/feet
	* 
	* Note: You can use minValue and maxValue to indicate ranges.
	*/
	public $cargoVolume;

	/**
	* @var string The date of the first registration of the vehicle with the respective public authorities.
	*/
	public $dateVehicleFirstRegistered;

	/**
	* @var DriveWheelConfigurationValue|string The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
	*/
	public $driveWheelConfiguration;

	/**
	* @var integer The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value, since there is no UN/CEFACT Common Code for "g/km".
	*/
	public $emissionsCO2;

	/**
	* @var QuantitativeValue The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for storage, this should indicate the total of all storage of the same type.
	* 
	* Typical unit code(s): LTR for liters, GLL of US gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
	*/
	public $fuelCapacity;

	/**
	* @var QuantitativeValue The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).
	* 
	* Note 1: There are unfortunately no standard unit codes for liters per 100 km.  Use unitText to indicate the unit of measurement, e.g. L/100 km.
	* Note 2: There are two ways of indicating the fuel consumption, fuelConsumption (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30 miles per gallon). They are reciprocal.
	* Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use valueReference to link the value for the fuel consumption to another value.
	*/
	public $fuelConsumption;

	/**
	* @var QuantitativeValue The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).
	* 
	* Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use unitText to indicate the unit of measurement, e.g. mpg or km/L.
	* Note 2: There are two ways of indicating the fuel consumption, fuelConsumption (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30 miles per gallon). They are reciprocal.
	* Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use valueReference to link the value for the fuel economy to another value.
	*/
	public $fuelEfficiency;

	/**
	* @var QualitativeValue|string The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
	*/
	public $fuelType;

	/**
	* @var string A textual description of known damages, both repaired and unrepaired.
	*/
	public $knownVehicleDamages;

	/**
	* @var QualitativeValue|string Indicates that the vehicle meets the respective emission standard.
	*/
	public $meetsEmissionStandard;

	/**
	* @var QuantitativeValue The total distance travelled by the particular vehicle since its initial production, as read from its odometer.
	* 
	* Typical unit code(s): KMT for kilometers, SMI for statute miles
	*/
	public $mileageFromOdometer;

	/**
	* @var string The release date of a vehicle model (often used to differentiate versions of the same make and model).
	*/
	public $modelDate;

	/**
	* @var integer|string The number or type of airbags in the vehicle.
	*/
	public $numberOfAirbags;

	/**
	* @var integer|QuantitativeValue The number of axles.
	* 
	* Typical unit code(s): C62
	*/
	public $numberOfAxles;

	/**
	* @var integer|QuantitativeValue The number of doors.
	* 
	* Typical unit code(s): C62
	*/
	public $numberOfDoors;

	/**
	* @var integer|QuantitativeValue The total number of forward gears available for the transmission system of the vehicle.
	* 
	* Typical unit code(s): C62
	*/
	public $numberOfForwardGears;

	/**
	* @var integer|QuantitativeValue The number of owners of the vehicle, including the current one.
	* 
	* Typical unit code(s): C62
	*/
	public $numberOfPreviousOwners;

	/**
	* @var QuantitativeValue The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle.
	* 
	* Typical unit code(s): KGM for kilogram, LBR for pound
	* 
	* Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of weight and payload
	* Note 2: You can indicate additional information in the name of the QuantitativeValue node.
	* Note 3: You may also link to a QualitativeValue node that provides additional information using valueReference.
	* Note 4: Note that you can use minValue and maxValue to indicate ranges.
	*/
	public $payload;

	/**
	* @var string The date of production of the item, e.g. vehicle.
	*/
	public $productionDate;

	/**
	* @var string The date the item e.g. vehicle was purchased by the current owner.
	*/
	public $purchaseDate;

	/**
	* @var integer|QuantitativeValue The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and in terms of limitations set by law.
	* 
	* Typical unit code(s): C62 for persons
	*/
	public $seatingCapacity;

	/**
	* @var QuantitativeValue The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range (indicated by maxValue should be the maximum speed achievable under regular conditions.
	* 
	* Typical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s), KNT for knot
	* 
	* *Note 1: Use minValue and maxValue to indicate the range. Typically, the minimal value is zero.
	* * Note 2: There are many different ways of measuring the speed range. You can link to information about how the given value has been determined using the valueReference property.
	*/
	public $speed;

	/**
	* @var SteeringPositionValue The position of the steering wheel or similar device (mostly for cars).
	*/
	public $steeringPosition;

	/**
	* @var QuantitativeValue The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR)
	* 
	* Typical unit code(s): KGM for kilogram, LBR for pound
	* 
	* Note 1: You can indicate additional information in the name of the QuantitativeValue node.
	* Note 2: You may also link to a QualitativeValue node that provides additional information using valueReference.
	* Note 3: Note that you can use minValue and maxValue to indicate ranges.
	*/
	public $tongueWeight;

	/**
	* @var QuantitativeValue The permitted weight of a trailer attached to the vehicle.
	* 
	* Typical unit code(s): KGM for kilogram, LBR for pound
	* * Note 1: You can indicate additional information in the name of the QuantitativeValue node.
	* * Note 2: You may also link to a QualitativeValue node that provides additional information using valueReference.
	* * Note 3: Note that you can use minValue and maxValue to indicate ranges.
	*/
	public $trailerWeight;

	/**
	* @var string A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
	*/
	public $vehicleConfiguration;

	/**
	* @var EngineSpecification Information about the engine or engines of the vehicle.
	*/
	public $vehicleEngine;

	/**
	* @var string The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
	*/
	public $vehicleIdentificationNumber;

	/**
	* @var string The color or color combination of the interior of the vehicle.
	*/
	public $vehicleInteriorColor;

	/**
	* @var string The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are characterized by the material used, an interior type can also be based on vehicle usage or target audience.
	*/
	public $vehicleInteriorType;

	/**
	* @var string The release date of a vehicle model (often used to differentiate versions of the same make and model).
	*/
	public $vehicleModelDate;

	/**
	* @var integer|QuantitativeValue The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.
	* 
	* Typical unit code(s): C62 for persons.
	*/
	public $vehicleSeatingCapacity;

	/**
	* @var CarUsageType|string Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation in many countries requires this information to be revealed when offering a car for sale.
	*/
	public $vehicleSpecialUsage;

	/**
	* @var QualitativeValue|string The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
	*/
	public $vehicleTransmission;

	/**
	* @var QuantitativeValue The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.
	* 
	* Typical unit code(s): KGM for kilogram, LBR for pound
	* 
	* Note 1: You can indicate additional information in the name of the QuantitativeValue node.
	* Note 2: You may also link to a QualitativeValue node that provides additional information using valueReference.
	* Note 3: Note that you can use minValue and maxValue to indicate ranges.
	*/
	public $weightTotal;

	/**
	* @var QuantitativeValue The distance between the centers of the front and rear wheels.
	* 
	* Typical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT for foot/feet
	*/
	public $wheelbase;

}