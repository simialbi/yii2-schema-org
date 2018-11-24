<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A subclass of OrganizationRole used to describe employee relationships.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EmployeeRole
 */
class EmployeeRole extends OrganizationRole {
    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @var MonetaryAmount|integer|PriceSpecification
     */
    public $baseSalary;

    /**
     * The currency (coded using ISO 4217 ) used for the main salary information in
     * this job posting or for this employee.
     *
     * @var string
     */
    public $salaryCurrency;

}