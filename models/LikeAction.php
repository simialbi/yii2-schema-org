<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for LikeAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LikeAction
 */
class LikeAction extends ReactAction {
	/**
	* @var ActionStatusType Indicates the current disposition of the Action.
	*/
	public $actionStatus;

	/**
	* @var Organization|Person The direct performer or driver of the action (animate or inanimate). e.g. John wrote a book.
	*/
	public $agent;

	/**
	* @var string The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to December.

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	*/
	public $endTime;

	/**
	* @var Thing For failed actions, more information on the cause of the failure.
	*/
	public $error;

	/**
	* @var Thing The object that helped the agent perform the action. e.g. John wrote a book with a pen.
	*/
	public $instrument;

	/**
	* @var Place|PostalAddress|string The location of for example where the event is happening, an organization is located, or where an action takes place.
	*/
	public $location;

	/**
	* @var Thing The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read a book.
	*/
	public $object;

	/**
	* @var Organization|Person Other co-agents that participated in the action indirectly. e.g. John wrote a book with Steve.
	*/
	public $participant;

	/**
	* @var Thing The result produced in the action. e.g. John wrote a book.
	*/
	public $result;

	/**
	* @var string The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to December.

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	*/
	public $startTime;

	/**
	* @var EntryPoint Indicates a target EntryPoint for an Action.
	*/
	public $target;

}