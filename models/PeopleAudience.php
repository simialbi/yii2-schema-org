<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A set of characteristics belonging to people, e.g. who compose an item's target
 * audience.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PeopleAudience
 */
class PeopleAudience extends Audience {
    /**
     * Specifying the health condition(s) of a patient, medical study, or other target
     * audience.
     *
     * @var MedicalCondition
     */
    public $healthCondition;

    /**
     * Audiences defined by a person's gender.
     *
     * @var string
     */
    public $requiredGender;

    /**
     * Audiences defined by a person's maximum age.
     *
     * @var integer
     */
    public $requiredMaxAge;

    /**
     * Audiences defined by a person's minimum age.
     *
     * @var integer
     */
    public $requiredMinAge;

    /**
     * The gender of the person or audience.
     *
     * @var string
     */
    public $suggestedGender;

    /**
     * Maximal age recommended for viewing content.
     *
     * @var integer
     */
    public $suggestedMaxAge;

    /**
     * Minimal age recommended for viewing content.
     *
     * @var integer
     */
    public $suggestedMinAge;

}