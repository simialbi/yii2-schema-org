<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for VoteAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VoteAction
 */
class VoteAction extends ChooseAction {
	/**
	* @var Person A sub property of object. The candidate subject of this action.
	*/
	public $candidate;

}