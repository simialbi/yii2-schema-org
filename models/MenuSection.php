<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MenuSection
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MenuSection
 */
class MenuSection extends CreativeWork {
	/**
	* @var MenuItem A food or drink item contained in a menu or menu section.
	*/
	public $hasMenuItem;

	/**
	* @var MenuSection A subgrouping of the menu (by dishes, course, serving time period, etc.).
	*/
	public $hasMenuSection;

}