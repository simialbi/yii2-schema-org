<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ParentAudience
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ParentAudience
 */
class ParentAudience extends PeopleAudience {
	/**
	* @var integer Maximal age of the child.
	*/
	public $childMaxAge;

	/**
	* @var integer Minimal age of the child.
	*/
	public $childMinAge;

}