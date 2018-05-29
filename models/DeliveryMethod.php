<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for DeliveryMethod
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DeliveryMethod
 */
class DeliveryMethod extends Enumeration {
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}