<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Physician
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Physician
 */
class Physician extends MedicalOrganization {
	/**
	* @var PostalAddress|string Physical address of the item.
	*/
	public $address;

	/**
	* @var AggregateRating The overall rating, based on a collection of reviews or ratings, of the item.
	*/
	public $aggregateRating;

	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

	/**
	* @var AdministrativeArea|GeoShape|Place|string The geographic area where a service or offered item is provided. Supersedes serviceArea.
	*/
	public $areaServed;

	/**
	* @var string An award won by or for this item. Supersedes awards.
	*/
	public $award;

	/**
	* @var Brand|Organization The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	*/
	public $brand;

	/**
	* @var ContactPoint A contact point for a person or organization. Supersedes contactPoints.
	*/
	public $contactPoint;

	/**
	* @var Organization A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
	*/
	public $department;

	/**
	* @var string The date that this organization was dissolved.
	*/
	public $dissolutionDate;

	/**
	* @var string The Dun & Bradstreet DUNS number for identifying an organization or business person.
	*/
	public $duns;

	/**
	* @var string Email address.
	*/
	public $email;

	/**
	* @var Person Someone working for this organization. Supersedes employees.
	*/
	public $employee;

	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

	/**
	* @var string The fax number.
	*/
	public $faxNumber;

	/**
	* @var Person A person who founded this organization. Supersedes founders.
	*/
	public $founder;

	/**
	* @var string The date that this organization was founded.
	*/
	public $foundingDate;

	/**
	* @var Place The place where the Organization was founded.
	*/
	public $foundingLocation;

	/**
	* @var Organization|Person A person or organization that supports (sponsors) something through some kind of financial contribution.
	*/
	public $funder;

	/**
	* @var string The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
	*/
	public $globalLocationNumber;

	/**
	* @var OfferCatalog Indicates an OfferCatalog listing for this Organization, Person, or Service.
	*/
	public $hasOfferCatalog;

	/**
	* @var Place Points-of-Sales operated by the organization or person.
	*/
	public $hasPOS;

	/**
	* @var string The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
	*/
	public $isicV4;

	/**
	* @var string The official name of the organization, e.g. the registered company name.
	*/
	public $legalName;

	/**
	* @var string An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
	*/
	public $leiCode;

	/**
	* @var Place|PostalAddress|string The location of for example where the event is happening, an organization is located, or where an action takes place.
	*/
	public $location;

	/**
	* @var ImageObject|string An associated logo.
	*/
	public $logo;

	/**
	* @var Offer A pointer to products or services offered by the organization or person. Inverse property: offeredBy.
	*/
	public $makesOffer;

	/**
	* @var Organization|Person A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals. Supersedes members, musicGroupMember. Inverse property: memberOf.
	*/
	public $member;

	/**
	* @var Organization|ProgramMembership An Organization (or ProgramMembership) to which this Person or Organization belongs. Inverse property: member.
	*/
	public $memberOf;

	/**
	* @var string The North American Industry Classification System (NAICS) code for a particular organization or business person.
	*/
	public $naics;

	/**
	* @var QuantitativeValue The number of employees in an organization e.g. business.
	*/
	public $numberOfEmployees;

	/**
	* @var OwnershipInfo|Product Products owned by the organization or person.
	*/
	public $owns;

	/**
	* @var Organization The larger organization that this organization is a subOrganization of, if any. Supersedes branchOf. Inverse property: subOrganization.
	*/
	public $parentOrganization;

	/**
	* @var Review A review of the item. Supersedes reviews.
	*/
	public $review;

	/**
	* @var Demand A pointer to products or services sought by the organization or person (demand).
	*/
	public $seeks;

	/**
	* @var Organization|Person A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	*/
	public $sponsor;

	/**
	* @var Organization A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property. Inverse property: parentOrganization.
	*/
	public $subOrganization;

	/**
	* @var string The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
	*/
	public $taxID;

	/**
	* @var string The telephone number.
	*/
	public $telephone;

	/**
	* @var string The Value-added Tax ID of the organization or person.
	*/
	public $vatID;

}