<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PeopleAudience
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PeopleAudience
 */
class PeopleAudience extends Audience {
	/**
	* @var MedicalCondition Specifying the health condition(s) of a patient, medical study, or other target audience.
	*/
	public $healthCondition;

	/**
	* @var string Audiences defined by a person's gender.
	*/
	public $requiredGender;

	/**
	* @var integer Audiences defined by a person's maximum age.
	*/
	public $requiredMaxAge;

	/**
	* @var integer Audiences defined by a person's minimum age.
	*/
	public $requiredMinAge;

	/**
	* @var string The gender of the person or audience.
	*/
	public $suggestedGender;

	/**
	* @var integer Maximal age recommended for viewing content.
	*/
	public $suggestedMaxAge;

	/**
	* @var integer Minimal age recommended for viewing content.
	*/
	public $suggestedMinAge;

}