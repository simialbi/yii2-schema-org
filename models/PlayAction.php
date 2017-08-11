<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PlayAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PlayAction
 */
class PlayAction extends Action {
	/**
	* @var Audience An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	*/
	public $audience;

	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

}