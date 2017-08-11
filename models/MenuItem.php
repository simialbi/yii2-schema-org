<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MenuItem
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MenuItem
 */
class MenuItem extends Intangible {
	/**
	* @var NutritionInformation Nutrition information about the recipe or menu item.
	*/
	public $nutrition;

	/**
	* @var Offer An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
	*/
	public $offers;

	/**
	* @var RestrictedDiet Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
	*/
	public $suitableForDiet;

}