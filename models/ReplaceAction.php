<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ReplaceAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReplaceAction
 */
class ReplaceAction extends UpdateAction {
	/**
	* @var Thing A sub property of object. The object that is being replaced.
	*/
	public $replacee;

	/**
	* @var Thing A sub property of object. The object that replaces.
	*/
	public $replacer;

}