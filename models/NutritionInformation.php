<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Nutritional information about the recipe.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/NutritionInformation
 */
class NutritionInformation extends StructuredValue {
    /**
     * The number of calories.
     *
     * @var Energy
     */
    public $calories;

    /**
     * The number of grams of carbohydrates.
     *
     * @var Mass
     */
    public $carbohydrateContent;

    /**
     * The number of milligrams of cholesterol.
     *
     * @var Mass
     */
    public $cholesterolContent;

    /**
     * The number of grams of fat.
     *
     * @var Mass
     */
    public $fatContent;

    /**
     * The number of grams of fiber.
     *
     * @var Mass
     */
    public $fiberContent;

    /**
     * The number of grams of protein.
     *
     * @var Mass
     */
    public $proteinContent;

    /**
     * The number of grams of saturated fat.
     *
     * @var Mass
     */
    public $saturatedFatContent;

    /**
     * The serving size, in terms of the number of volume or mass.
     *
     * @var string
     */
    public $servingSize;

    /**
     * The number of milligrams of sodium.
     *
     * @var Mass
     */
    public $sodiumContent;

    /**
     * The number of grams of sugar.
     *
     * @var Mass
     */
    public $sugarContent;

    /**
     * The number of grams of trans fat.
     *
     * @var Mass
     */
    public $transFatContent;

    /**
     * The number of grams of unsaturated fat.
     *
     * @var Mass
     */
    public $unsaturatedFatContent;


}