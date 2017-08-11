<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for RsvpAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RsvpAction
 */
class RsvpAction extends InformAction {
	/**
	* @var integer If responding yes, the number of guests who will attend in addition to the invitee.
	*/
	public $additionalNumberOfGuests;

	/**
	* @var Comment Comments, typically from users.
	*/
	public $comment;

	/**
	* @var RsvpResponseType The response (yes, no, maybe) to the RSVP.
	*/
	public $rsvpResponse;

}