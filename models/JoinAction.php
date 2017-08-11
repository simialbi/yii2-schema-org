<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for JoinAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/JoinAction
 */
class JoinAction extends InteractAction {
	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

}