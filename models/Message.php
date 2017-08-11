<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Message
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Message
 */
class Message extends CreativeWork {
	/**
	* @var string The date/time at which the message has been read by the recipient if a single recipient exists.
	*/
	public $dateRead;

	/**
	* @var string The date/time the message was received if a single recipient exists.
	*/
	public $dateReceived;

	/**
	* @var string The date/time at which the message was sent.
	*/
	public $dateSent;

	/**
	* @var CreativeWork A CreativeWork attached to the message.
	*/
	public $messageAttachment;

	/**
	* @var Audience|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

	/**
	* @var Audience|Organization|Person A sub property of participant. The participant who is at the sending end of the action.
	*/
	public $sender;

}