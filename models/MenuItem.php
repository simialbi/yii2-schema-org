<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A food or drink item listed in a menu or menu section.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MenuItem
 */
class MenuItem extends Intangible {
    /**
     * Additional menu item(s) such as a side dish of salad or side order of fries that
     * can be added to this menu item. Additionally it can be a menu section containing
     * allowed add-on menu items for this menu item.
     *
     * @var MenuItem|MenuSection
     */
    public $menuAddOn;

    /**
     * Nutrition information about the recipe or menu item.
     *
     * @var NutritionInformation
     */
    public $nutrition;

    /**
     * An offer to provide this item—for example, an offer to sell a product, rent
     * the DVD of a movie, perform a service, or give away tickets to an event.
     *
     * @var Offer
     */
    public $offers;

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item
     * is suitable, e.g. diabetic, halal etc.
     *
     * @var RestrictedDiet
     */
    public $suitableForDiet;

}