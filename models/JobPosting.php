<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for JobPosting
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/JobPosting
 */
class JobPosting extends Intangible {
	/**
	* @var MonetaryAmount|integer|PriceSpecification The base salary of the job or of an employee in an EmployeeRole.
	*/
	public $baseSalary;

	/**
	* @var string Publication date for the job posting.
	*/
	public $datePosted;

	/**
	* @var string Educational background needed for the position.
	*/
	public $educationRequirements;

	/**
	* @var string Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
	*/
	public $employmentType;

	/**
	* @var string Description of skills and experience needed for the position.
	*/
	public $experienceRequirements;

	/**
	* @var Organization Organization offering the job position.
	*/
	public $hiringOrganization;

	/**
	* @var string Description of bonus and commission compensation aspects of the job. Supersedes incentives.
	*/
	public $incentiveCompensation;

	/**
	* @var string The industry associated with the job position.
	*/
	public $industry;

	/**
	* @var string Description of benefits associated with the job. Supersedes benefits.
	*/
	public $jobBenefits;

	/**
	* @var Place A (typically single) geographic location associated with the job position.
	*/
	public $jobLocation;

	/**
	* @var string Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
	*/
	public $occupationalCategory;

	/**
	* @var string Specific qualifications required for this role.
	*/
	public $qualifications;

	/**
	* @var string Responsibilities associated with this role.
	*/
	public $responsibilities;

	/**
	* @var string The currency (coded using ISO 4217 ) used for the main salary information in this job posting or for this employee.
	*/
	public $salaryCurrency;

	/**
	* @var string Skills required to fulfill this role.
	*/
	public $skills;

	/**
	* @var string Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
	*/
	public $specialCommitments;

	/**
	* @var string The title of the job.
	*/
	public $title;

	/**
	* @var string The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	*/
	public $validThrough;

	/**
	* @var string The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
	*/
	public $workHours;

}