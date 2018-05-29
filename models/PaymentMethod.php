<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PaymentMethod
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PaymentMethod
 */
class PaymentMethod extends Enumeration {
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}