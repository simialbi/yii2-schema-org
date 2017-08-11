<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Car
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Car
 */
class Car extends Vehicle {
	/**
	* @var QuantitativeValue The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.

Typical unit code(s): LTR for liters, FTQ for cubic foot/feet

Note: You can use minValue and maxValue to indicate ranges.
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
	* @var QuantitativeValue The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).

Note 1: There are unfortunately no standard unit codes for liters per 100 km.  Use unitText to indicate the unit of measurement, e.g. L/100 km.
Note 2: There are two ways of indicating the fuel consumption, fuelConsumption (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30 miles per gallon). They are reciprocal.
Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use valueReference to link the value for the fuel consumption to another value.
	*/
	public $fuelConsumption;

	/**
	* @var QuantitativeValue The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).

Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use unitText to indicate the unit of measurement, e.g. mpg or km/L.
Note 2: There are two ways of indicating the fuel consumption, fuelConsumption (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30 miles per gallon). They are reciprocal.
Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use valueReference to link the value for the fuel economy to another value.
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
	* @var QuantitativeValue The total distance travelled by the particular vehicle since its initial production, as read from its odometer.

Typical unit code(s): KMT for kilometers, SMI for statute miles
	*/
	public $mileageFromOdometer;

	/**
	* @var integer|string The number or type of airbags in the vehicle.
	*/
	public $numberOfAirbags;

	/**
	* @var integer|QuantitativeValue The number of axles.

Typical unit code(s): C62
	*/
	public $numberOfAxles;

	/**
	* @var integer|QuantitativeValue The number of doors.

Typical unit code(s): C62
	*/
	public $numberOfDoors;

	/**
	* @var integer|QuantitativeValue The total number of forward gears available for the transmission system of the vehicle.

Typical unit code(s): C62
	*/
	public $numberOfForwardGears;

	/**
	* @var integer|QuantitativeValue The number of owners of the vehicle, including the current one.

Typical unit code(s): C62
	*/
	public $numberOfPreviousOwners;

	/**
	* @var string The date of production of the item, e.g. vehicle.
	*/
	public $productionDate;

	/**
	* @var string The date the item e.g. vehicle was purchased by the current owner.
	*/
	public $purchaseDate;

	/**
	* @var SteeringPositionValue The position of the steering wheel or similar device (mostly for cars).
	*/
	public $steeringPosition;

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

Typical unit code(s): C62 for persons.
	*/
	public $vehicleSeatingCapacity;

	/**
	* @var string Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation in many countries requires this information to be revealed when offering a car for sale.
	*/
	public $vehicleSpecialUsage;

	/**
	* @var QualitativeValue|string The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
	*/
	public $vehicleTransmission;

}