<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of notifying an event organizer as to whether you expect to attend the
 * event.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RsvpAction
 */
class RsvpAction extends InformAction {
    /**
     * If responding yes, the number of guests who will attend in addition to the
     * invitee.
     *
     * @var integer
     */
    public $additionalNumberOfGuests;

    /**
     * Comments, typically from users.
     *
     * @var Comment
     */
    public $comment;

    /**
     * The response (yes, no, maybe) to the RSVP.
     *
     * @var RsvpResponseType
     */
    public $rsvpResponse;


}