<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A single message from a sender to one or more organizations or people.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Message
 */
class Message extends CreativeWork {
    /**
     * A sub property of recipient. The recipient blind copied on a message.
     *
     * @var ContactPoint|Organization|Person
     */
    public $bccRecipient;

    /**
     * A sub property of recipient. The recipient copied on a message.
     *
     * @var ContactPoint|Organization|Person
     */
    public $ccRecipient;

    /**
     * The date/time at which the message has been read by the recipient if a single
     * recipient exists.
     *
     * @var string
     */
    public $dateRead;

    /**
     * The date/time the message was received if a single recipient exists.
     *
     * @var string
     */
    public $dateReceived;

    /**
     * The date/time at which the message was sent.
     *
     * @var string
     */
    public $dateSent;

    /**
     * A CreativeWork attached to the message.
     *
     * @var CreativeWork
     */
    public $messageAttachment;

    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $recipient;

    /**
     * A sub property of participant. The participant who is at the sending end of the
     * action.
     *
     * @var Audience|Organization|Person
     */
    public $sender;

    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $toRecipient;


}