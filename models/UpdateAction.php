<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for UpdateAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/UpdateAction
 */
class UpdateAction extends Action {
	/**
	* @var Thing A sub property of object. The collection target of the action. Supersedes collection.
	*/
	public $targetCollection;

}