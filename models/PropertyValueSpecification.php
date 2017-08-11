<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PropertyValueSpecification
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PropertyValueSpecification
 */
class PropertyValueSpecification extends Intangible {
	/**
	* @var string|Thing The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
	*/
	public $defaultValue;

	/**
	* @var integer The upper value of some characteristic or property.
	*/
	public $maxValue;

	/**
	* @var integer The lower value of some characteristic or property.
	*/
	public $minValue;

	/**
	* @var boolean Whether multiple values are allowed for the property.  Default is false.
	*/
	public $multipleValues;

	/**
	* @var boolean Whether or not a property is mutable.  Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
	*/
	public $readonlyValue;

	/**
	* @var integer The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
	*/
	public $stepValue;

	/**
	* @var integer Specifies the allowed range for number of characters in a literal value.
	*/
	public $valueMaxLength;

	/**
	* @var integer Specifies the minimum allowed range for number of characters in a literal value.
	*/
	public $valueMinLength;

	/**
	* @var string Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
	*/
	public $valueName;

	/**
	* @var string Specifies a regular expression for testing literal values according to the HTML spec.
	*/
	public $valuePattern;

	/**
	* @var boolean Whether the property must be filled in to complete the action.  Default is false.
	*/
	public $valueRequired;

}