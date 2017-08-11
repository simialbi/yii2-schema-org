<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for GovernmentPermit
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GovernmentPermit
 */
class GovernmentPermit extends Permit {
	/**
	* @var Organization The organization issuing the ticket or permit.
	*/
	public $issuedBy;

	/**
	* @var Service The service through with the permit was granted.
	*/
	public $issuedThrough;

	/**
	* @var Audience The target audience for this permit.
	*/
	public $permitAudience;

	/**
	* @var Duration The time validity of the permit.
	*/
	public $validFor;

	/**
	* @var string The date when the item becomes valid.
	*/
	public $validFrom;

	/**
	* @var AdministrativeArea The geographic area where the permit is valid.
	*/
	public $validIn;

	/**
	* @var string The date when the item is no longer valid.
	*/
	public $validUntil;

}