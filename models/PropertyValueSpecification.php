<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A Property value specification.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PropertyValueSpecification
 */
class PropertyValueSpecification extends Intangible {
    /**
     * The default value of the input.  For properties that expect a literal, the
     * default is a literal value, for properties that expect an object, it's an ID
     * reference to one of the current values.
     *
     * @var string|Thing
     */
    public $defaultValue;

    /**
     * The upper value of some characteristic or property.
     *
     * @var integer
     */
    public $maxValue;

    /**
     * The lower value of some characteristic or property.
     *
     * @var integer
     */
    public $minValue;

    /**
     * Whether multiple values are allowed for the property.  Default is false.
     *
     * @var boolean
     */
    public $multipleValues;

    /**
     * Whether or not a property is mutable.  Default is false. Specifying this for a
     * property that also has a value makes it act similar to a "hidden" input in an
     * HTML form.
     *
     * @var boolean
     */
    public $readonlyValue;

    /**
     * The stepValue attribute indicates the granularity that is expected (and
     * required) of the value in a PropertyValueSpecification.
     *
     * @var integer
     */
    public $stepValue;

    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     * @var integer
     */
    public $valueMaxLength;

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     *
     * @var integer
     */
    public $valueMinLength;

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates
     * and form encoding in a manner analogous to HTML's input@name.
     *
     * @var string
     */
    public $valueName;

    /**
     * Specifies a regular expression for testing literal values according to the HTML
     * spec.
     *
     * @var string
     */
    public $valuePattern;

    /**
     * Whether the property must be filled in to complete the action.  Default is
     * false.
     *
     * @var boolean
     */
    public $valueRequired;


}