<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Recipe
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Recipe
 */
class Recipe extends CreativeWork {
	/**
	* @var Duration The time it takes to actually cook the dish, in ISO 8601 duration format.
	*/
	public $cookTime;

	/**
	* @var string The method of cooking, such as Frying, Steaming, ...
	*/
	public $cookingMethod;

	/**
	* @var NutritionInformation Nutrition information about the recipe or menu item.
	*/
	public $nutrition;

	/**
	* @var Duration The length of time it takes to prepare the recipe, in ISO 8601 duration format.
	*/
	public $prepTime;

	/**
	* @var string The category of the recipe—for example, appetizer, entree, etc.
	*/
	public $recipeCategory;

	/**
	* @var string The cuisine of the recipe (for example, French or Ethiopian).
	*/
	public $recipeCuisine;

	/**
	* @var string A single ingredient used in the recipe, e.g. sugar, flour or garlic. Supersedes ingredients.
	*/
	public $recipeIngredient;

	/**
	* @var ItemList|string A step or instruction involved in making the recipe.
	*/
	public $recipeInstructions;

	/**
	* @var string The quantity produced by the recipe (for example, number of people served, number of servings, etc).
	*/
	public $recipeYield;

	/**
	* @var RestrictedDiet Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
	*/
	public $suitableForDiet;

	/**
	* @var Duration The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
	*/
	public $totalTime;

}