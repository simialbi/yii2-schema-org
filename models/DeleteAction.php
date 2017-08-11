<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for DeleteAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DeleteAction
 */
class DeleteAction extends UpdateAction {
	/**
	* @var Thing A sub property of object. The collection target of the action. Supersedes collection.
	*/
	public $targetCollection;

}