<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of intentionally disregarding the object. An agent ignores an object.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/IgnoreAction
 */
class IgnoreAction extends AssessAction {
    /**
     * Indicates the current disposition of the Action.
     *
     * @var ActionStatusType
     */
    public $actionStatus;

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g. John
     * wrote a book.
     *
     * @var Organization|Person
     */
    public $agent;

    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For actions
     * that span a period of time, when the action was performed. e.g. John wrote a
     * book from January to December.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @var string
     */
    public $endTime;

    /**
     * For failed actions, more information on the cause of the failure.
     *
     * @var Thing
     */
    public $error;

    /**
     * The object that helped the agent perform the action. e.g. John wrote a book with
     * a pen.
     *
     * @var Thing
     */
    public $instrument;

    /**
     * The location of for example where the event is happening, an organization is
     * located, or where an action takes place.
     *
     * @var Place|PostalAddress|string
     */
    public $location;

    /**
     * The object upon which the action is carried out, whose state is kept intact or
     * changed. Also known as the semantic roles patient, affected or undergoer (which
     * change their state) or theme (which doesn't). e.g. John read a book.
     *
     * @var Thing
     */
    public $object;

    /**
     * Other co-agents that participated in the action indirectly. e.g. John wrote a
     * book with Steve.
     *
     * @var Organization|Person
     */
    public $participant;

    /**
     * The result produced in the action. e.g. John wrote a book.
     *
     * @var Thing
     */
    public $result;

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. e.g. John
     * wrote a book from January to December.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @var string
     */
    public $startTime;

    /**
     * Indicates a target EntryPoint for an Action.
     *
     * @var EntryPoint
     */
    public $target;

}