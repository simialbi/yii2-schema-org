<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for NutritionInformation
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/NutritionInformation
 */
class NutritionInformation extends StructuredValue {
	/**
	* @var Energy The number of calories.
	*/
	public $calories;

	/**
	* @var Mass The number of grams of carbohydrates.
	*/
	public $carbohydrateContent;

	/**
	* @var Mass The number of milligrams of cholesterol.
	*/
	public $cholesterolContent;

	/**
	* @var Mass The number of grams of fat.
	*/
	public $fatContent;

	/**
	* @var Mass The number of grams of fiber.
	*/
	public $fiberContent;

	/**
	* @var Mass The number of grams of protein.
	*/
	public $proteinContent;

	/**
	* @var Mass The number of grams of saturated fat.
	*/
	public $saturatedFatContent;

	/**
	* @var string The serving size, in terms of the number of volume or mass.
	*/
	public $servingSize;

	/**
	* @var Mass The number of milligrams of sodium.
	*/
	public $sodiumContent;

	/**
	* @var Mass The number of grams of sugar.
	*/
	public $sugarContent;

	/**
	* @var Mass The number of grams of trans fat.
	*/
	public $transFatContent;

	/**
	* @var Mass The number of grams of unsaturated fat.
	*/
	public $unsaturatedFatContent;

}