<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A sub-grouping of food or drink items in a menu. E.g. courses (such as 'Dinner',
 * 'Breakfast', etc.), specific type of dishes (such as 'Meat', 'Vegan', 'Drinks',
 * etc.), or some other classification made by the menu provider.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MenuSection
 */
class MenuSection extends CreativeWork {
    /**
     * A food or drink item contained in a menu or menu section.
     *
     * @var MenuItem
     */
    public $hasMenuItem;

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     *
     * @var MenuSection
     */
    public $hasMenuSection;

}