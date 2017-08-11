<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for EngineSpecification
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EngineSpecification
 */
class EngineSpecification extends StructuredValue {
	/**
	* @var QualitativeValue|string The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
	*/
	public $fuelType;

}