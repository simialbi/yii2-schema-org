<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of producing/preparing food.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CookAction
 */
class CookAction extends CreateAction {
    /**
     * A sub property of location. The specific food establishment where the action
     * occurred.
     *
     * @var FoodEstablishment|Place
     */
    public $foodEstablishment;

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     * @var FoodEvent
     */
    public $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the
     * action.
     *
     * @var Recipe
     */
    public $recipe;


}