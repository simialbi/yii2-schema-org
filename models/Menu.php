<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A structured representation of food or drink items available from a
 * FoodEstablishment.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Menu
 */
class Menu extends CreativeWork {
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