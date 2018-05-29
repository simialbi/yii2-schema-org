<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for OfferItemCondition
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/OfferItemCondition
 */
class OfferItemCondition extends Enumeration {
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}