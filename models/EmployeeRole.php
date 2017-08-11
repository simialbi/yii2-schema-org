<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for EmployeeRole
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EmployeeRole
 */
class EmployeeRole extends OrganizationRole {
	/**
	* @var MonetaryAmount|integer|PriceSpecification The base salary of the job or of an employee in an EmployeeRole.
	*/
	public $baseSalary;

	/**
	* @var string The currency (coded using ISO 4217 ) used for the main salary information in this job posting or for this employee.
	*/
	public $salaryCurrency;

}