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
	* @var Diet A sub property of instrument. The diet used in this action.
	*/
	public $diet;

	/**
	* @var Distance The distance travelled, e.g. exercising or travelling.
	*/
	public $distance;

	/**
	* @var Place A sub property of location. The course where this action was taken. Supersedes course.
	*/
	public $exerciseCourse;

	/**
	* @var ExercisePlan A sub property of instrument. The exercise plan used on this action.
	*/
	public $exercisePlan;

	/**
	* @var Diet A sub property of instrument. The diet used in this action.
	*/
	public $exerciseRelatedDiet;

	/**
	* @var string Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
	*/
	public $exerciseType;

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