<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for HowToSection
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowToSection
 */
class HowToSection extends ItemList {
	/**
	* @var CreativeWork|ItemList|string The steps in the form of a single item (text, document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
	*/
	public $steps;

}