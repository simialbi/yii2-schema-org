<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of participating in exertive activity for the purposes of improving
 * health and fitness.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ExerciseAction
 */
class ExerciseAction extends PlayAction {
    /**
     * A sub property of instrument. The diet used in this action.
     *
     * @var Diet
     */
    public $diet;

    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     * @var Distance
     */
    public $distance;

    /**
     * A sub property of location. The course where this action was taken. Supersedes
     * course.
     *
     * @var Place
     */
    public $exerciseCourse;

    /**
     * A sub property of instrument. The exercise plan used on this action.
     *
     * @var ExercisePlan
     */
    public $exercisePlan;

    /**
     * A sub property of instrument. The diet used in this action.
     *
     * @var Diet
     */
    public $exerciseRelatedDiet;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility
     * training, aerobics, cardiac rehabilitation, etc.
     *
     * @var string
     */
    public $exerciseType;

    /**
     * A sub property of location. The original location of the object or the agent
     * before the action.
     *
     * @var Place
     */
    public $fromLocation;

    /**
     * A sub property of participant. The opponent on this action.
     *
     * @var Person
     */
    public $opponent;

    /**
     * A sub property of location. The sports activity location where this action
     * occurred.
     *
     * @var SportsActivityLocation
     */
    public $sportsActivityLocation;

    /**
     * A sub property of location. The sports event where this action occurred.
     *
     * @var SportsEvent
     */
    public $sportsEvent;

    /**
     * A sub property of participant. The sports team that participated on this action.
     *
     * @var SportsTeam
     */
    public $sportsTeam;

    /**
     * A sub property of location. The final location of the object or the agent after
     * the action.
     *
     * @var Place
     */
    public $toLocation;

}