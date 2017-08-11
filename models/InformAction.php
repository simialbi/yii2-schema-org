<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for InformAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InformAction
 */
class InformAction extends CommunicateAction {
	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

}