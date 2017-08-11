<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ViewAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ViewAction
 */
class ViewAction extends ConsumeAction {
	/**
	* @var Offer An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
	*/
	public $expectsAcceptanceOf;

}