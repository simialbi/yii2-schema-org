<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for CookAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CookAction
 */
class CookAction extends CreateAction {
	/**
	* @var FoodEstablishment|Place A sub property of location. The specific food establishment where the action occurred.
	*/
	public $foodEstablishment;

	/**
	* @var FoodEvent A sub property of location. The specific food event where the action occurred.
	*/
	public $foodEvent;

	/**
	* @var Recipe A sub property of instrument. The recipe/instructions used to perform the action.
	*/
	public $recipe;

}