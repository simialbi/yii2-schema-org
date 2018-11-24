<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A recipe. For dietary restrictions covered by the recipe, a few common
 * restrictions are enumerated via suitableForDiet. The keywords property can also
 * be used to add more detail.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Recipe
 */
class Recipe extends HowTo {
    /**
     * The time it takes to actually cook the dish, in ISO 8601 duration format.
     *
     * @var Duration
     */
    public $cookTime;

    /**
     * The method of cooking, such as Frying, Steaming, ...
     *
     * @var string
     */
    public $cookingMethod;

    /**
     * Nutrition information about the recipe or menu item.
     *
     * @var NutritionInformation
     */
    public $nutrition;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     * @var string
     */
    public $recipeCategory;

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     *
     * @var string
     */
    public $recipeCuisine;

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic. Supersedes
     * ingredients.
     *
     * @var string
     */
    public $recipeIngredient;

    /**
     * A step in making the recipe, in the form of a single item (document, video,
     * etc.) or an ordered list with HowToStep and/or HowToSection items.
     *
     * @var CreativeWork|ItemList|string
     */
    public $recipeInstructions;

    /**
     * The quantity produced by the recipe (for example, number of people served,
     * number of servings, etc).
     *
     * @var QuantitativeValue|string
     */
    public $recipeYield;

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item
     * is suitable, e.g. diabetic, halal etc.
     *
     * @var RestrictedDiet
     */
    public $suitableForDiet;


}