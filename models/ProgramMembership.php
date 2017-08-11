<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ProgramMembership
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ProgramMembership
 */
class ProgramMembership extends Intangible {
	/**
	* @var Organization The organization (airline, travelers' club, etc.) the membership is made with.
	*/
	public $hostingOrganization;

	/**
	* @var Organization|Person A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals. Supersedes members, musicGroupMember. Inverse property: memberOf.
	*/
	public $member;

	/**
	* @var string A unique identifier for the membership.
	*/
	public $membershipNumber;

	/**
	* @var string The program providing the membership.
	*/
	public $programName;

}