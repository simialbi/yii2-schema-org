<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for QualitativeValue
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/QualitativeValue
 */
class QualitativeValue extends Enumeration {
	/**
	* @var PropertyValue A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.
	* 
	* Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
	*/
	public $additionalProperty;

	/**
	* @var QualitativeValue This ordering relation for qualitative values indicates that the subject is equal to the object.
	*/
	public $equal;

	/**
	* @var QualitativeValue This ordering relation for qualitative values indicates that the subject is greater than the object.
	*/
	public $greater;

	/**
	* @var QualitativeValue This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
	*/
	public $greaterOrEqual;

	/**
	* @var QualitativeValue This ordering relation for qualitative values indicates that the subject is lesser than the object.
	*/
	public $lesser;

	/**
	* @var QualitativeValue This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
	*/
	public $lesserOrEqual;

	/**
	* @var QualitativeValue This ordering relation for qualitative values indicates that the subject is not equal to the object.
	*/
	public $nonEqual;

	/**
	* @var Enumeration|PropertyValue|QualitativeValue|QuantitativeValue|StructuredValue A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
	*/
	public $valueReference;

}