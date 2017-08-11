<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ExerciseAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ExerciseAction
 */
class ExerciseAction extends PlayAction {
	/**
	* @var Distance The distance travelled, e.g. exercising or travelling.
	*/
	public $distance;

	/**
	* @var Place A sub property of location. The course where this action was taken. Supersedes course.
	*/
	public $exerciseCourse;

	/**
	* @var Place A sub property of location. The original location of the object or the agent before the action.
	*/
	public $fromLocation;

	/**
	* @var Person A sub property of participant. The opponent on this action.
	*/
	public $opponent;

	/**
	* @var SportsActivityLocation A sub property of location. The sports activity location where this action occurred.
	*/
	public $sportsActivityLocation;

	/**
	* @var SportsEvent A sub property of location. The sports event where this action occurred.
	*/
	public $sportsEvent;

	/**
	* @var SportsTeam A sub property of participant. The sports team that participated on this action.
	*/
	public $sportsTeam;

	/**
	* @var Place A sub property of location. The final location of the object or the agent after the action.
	*/
	public $toLocation;

}