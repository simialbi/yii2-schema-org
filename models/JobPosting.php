<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A listing that describes a job opening in a certain organization.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/JobPosting
 */
class JobPosting extends Intangible {
    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @var MonetaryAmount|integer|PriceSpecification
     */
    public $baseSalary;

    /**
     * Publication date for the job posting.
     *
     * @var string
     */
    public $datePosted;

    /**
     * Educational background needed for the position or Occupation.
     *
     * @var string
     */
    public $educationRequirements;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal,
     * internship).
     *
     * @var string
     */
    public $employmentType;

    /**
     * A property describing the estimated salary for a job posting based on a variety
     * of variables including, but not limited to industry, job title, and location.
     * The estimated salary is usually computed by outside organizations and therefore
     * the hiring organization is not bound to this estimated salary.
     *
     * @var MonetaryAmount|MonetaryAmountDistribution|integer|PriceSpecification
     */
    public $estimatedSalary;

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     * @var string
     */
    public $experienceRequirements;

    /**
     * Organization offering the job position.
     *
     * @var Organization
     */
    public $hiringOrganization;

    /**
     * Description of bonus and commission compensation aspects of the job. Supersedes
     * incentives.
     *
     * @var string
     */
    public $incentiveCompensation;

    /**
     * The industry associated with the job position.
     *
     * @var string
     */
    public $industry;

    /**
     * Description of benefits associated with the job. Supersedes benefits.
     *
     * @var string
     */
    public $jobBenefits;

    /**
     * A (typically single) geographic location associated with the job position.
     *
     * @var Place
     */
    public $jobLocation;

    /**
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy:
     * http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and
     * formal code, with the property repeated for each applicable value.
     *
     * @var string
     */
    public $occupationalCategory;

    /**
     * Specific qualifications required for this role or Occupation.
     *
     * @var string
     */
    public $qualifications;

    /**
     * The Occupation for the JobPosting.
     *
     * @var Occupation
     */
    public $relevantOccupation;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     * @var string
     */
    public $responsibilities;

    /**
     * The currency (coded using ISO 4217 ) used for the main salary information in
     * this job posting or for this employee.
     *
     * @var string
     */
    public $salaryCurrency;

    /**
     * Skills required to fulfill this role.
     *
     * @var string
     */
    public $skills;

    /**
     * Any special commitments associated with this job posting. Valid entries include
     * VeteranCommit, MilitarySpouseCommit, etc.
     *
     * @var string
     */
    public $specialCommitments;

    /**
     * The title of the job.
     *
     * @var string
     */
    public $title;

    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @var string
     */
    public $validThrough;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     *
     * @var string
     */
    public $workHours;

}