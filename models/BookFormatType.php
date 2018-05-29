<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for BookFormatType
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BookFormatType
 */
class BookFormatType extends Enumeration {
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}