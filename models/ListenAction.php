<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ListenAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ListenAction
 */
class ListenAction extends ConsumeAction {
	/**
	* @var Offer An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
	*/
	public $expectsAcceptanceOf;

}