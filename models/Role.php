<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Role
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Role
 */
class Role extends Intangible {
	/**
	* @var string The end date and time of the item (in ISO 8601 date format).
	*/
	public $endDate;

	/**
	* @var string A role played, performed or filled by a person or organization. For example, the team of creators for a comic book might fill the roles named 'inker', 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the position named 'Quarterback'. Supersedes namedPosition.
	*/
	public $roleName;

	/**
	* @var string The start date and time of the item (in ISO 8601 date format).
	*/
	public $startDate;

}