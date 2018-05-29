<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Enumeration
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Enumeration
 */
class Enumeration extends Intangible {
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}