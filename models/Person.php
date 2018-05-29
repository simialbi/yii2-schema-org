<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Person
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Person
 */
class Person extends Thing {
	/**
	* @var string An additional name for a Person, can be used for a middle name.
	*/
	public $additionalName;

	/**
	* @var PostalAddress|string Physical address of the item.
	*/
	public $address;

	/**
	* @var Organization An organization that this person is affiliated with. For example, a school/university, a club, or a team.
	*/
	public $affiliation;

	/**
	* @var EducationalOrganization|Organization An organization that the person is an alumni of. Inverse property: alumni.
	*/
	public $alumniOf;

	/**
	* @var string An award won by or for this item. Supersedes awards.
	*/
	public $award;

	/**
	* @var string Date of birth.
	*/
	public $birthDate;

	/**
	* @var Place The place where the person was born.
	*/
	public $birthPlace;

	/**
	* @var Brand|Organization The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	*/
	public $brand;

	/**
	* @var Person A child of the person.
	*/
	public $children;

	/**
	* @var Person|string A colleague of the person. Supersedes colleagues.
	*/
	public $colleague;

	/**
	* @var ContactPoint A contact point for a person or organization. Supersedes contactPoints.
	*/
	public $contactPoint;

	/**
	* @var string Date of death.
	*/
	public $deathDate;

	/**
	* @var Place The place where the person died.
	*/
	public $deathPlace;

	/**
	* @var string The Dun & Bradstreet DUNS number for identifying an organization or business person.
	*/
	public $duns;

	/**
	* @var string Email address.
	*/
	public $email;

	/**
	* @var string Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
	*/
	public $familyName;

	/**
	* @var string The fax number.
	*/
	public $faxNumber;

	/**
	* @var Person The most generic uni-directional social relation.
	*/
	public $follows;

	/**
	* @var Organization|Person A person or organization that supports (sponsors) something through some kind of financial contribution.
	*/
	public $funder;

	/**
	* @var GenderType|string Gender of the person. While http://schema.org/Male and http://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender.
	*/
	public $gender;

	/**
	* @var string Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
	*/
	public $givenName;

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
	* @var Distance|QuantitativeValue The height of the item.
	*/
	public $height;

	/**
	* @var ContactPoint|Place A contact location for a person's residence.
	*/
	public $homeLocation;

	/**
	* @var string An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
	*/
	public $honorificPrefix;

	/**
	* @var string An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
	*/
	public $honorificSuffix;

	/**
	* @var string The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
	*/
	public $isicV4;

	/**
	* @var string The job title of the person (for example, Financial Manager).
	*/
	public $jobTitle;

	/**
	* @var Person The most generic bi-directional social/work relation.
	*/
	public $knows;

	/**
	* @var Offer A pointer to products or services offered by the organization or person. Inverse property: offeredBy.
	*/
	public $makesOffer;

	/**
	* @var Organization|ProgramMembership An Organization (or ProgramMembership) to which this Person or Organization belongs. Inverse property: member.
	*/
	public $memberOf;

	/**
	* @var string The North American Industry Classification System (NAICS) code for a particular organization or business person.
	*/
	public $naics;

	/**
	* @var Country Nationality of the person.
	*/
	public $nationality;

	/**
	* @var MonetaryAmount|PriceSpecification The total financial value of the person as calculated by subtracting assets from liabilities.
	*/
	public $netWorth;

	/**
	* @var OwnershipInfo|Product Products owned by the organization or person.
	*/
	public $owns;

	/**
	* @var Person A parent of this person. Supersedes parents.
	*/
	public $parent;

	/**
	* @var Event Event that this person is a performer or participant in.
	*/
	public $performerIn;

	/**
	* @var CreativeWork|string The publishingPrinciples property indicates (typically via URL) a document describing the editorial principles of an Organization (or individual e.g. a Person writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a CreativeWork (e.g. NewsArticle) the principles are those of the party primarily responsible for the creation of the CreativeWork.
	* 
	* While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a funder) can be expressed using schema.org terminology.
	*/
	public $publishingPrinciples;

	/**
	* @var Person The most generic familial relation.
	*/
	public $relatedTo;

	/**
	* @var Demand A pointer to products or services sought by the organization or person (demand).
	*/
	public $seeks;

	/**
	* @var Person A sibling of the person. Supersedes siblings.
	*/
	public $sibling;

	/**
	* @var Organization|Person A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	*/
	public $sponsor;

	/**
	* @var Person The person's spouse.
	*/
	public $spouse;

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

	/**
	* @var QuantitativeValue The weight of the product or person.
	*/
	public $weight;

	/**
	* @var ContactPoint|Place A contact location for a person's place of work.
	*/
	public $workLocation;

	/**
	* @var Organization Organizations that the person works for.
	*/
	public $worksFor;

}