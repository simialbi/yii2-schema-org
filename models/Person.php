<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A person (alive, dead, undead, or fictional).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Person
 */
class Person extends Thing {
    /**
     * An additional name for a Person, can be used for a middle name.
     *
     * @var string
     */
    public $additionalName;

    /**
     * Physical address of the item.
     *
     * @var PostalAddress|string
     */
    public $address;

    /**
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     *
     * @var Organization
     */
    public $affiliation;

    /**
     * An organization that the person is an alumni of. Inverse property: alumni.
     *
     * @var EducationalOrganization|Organization
     */
    public $alumniOf;

    /**
     * An award won by or for this item. Supersedes awards.
     *
     * @var string
     */
    public $award;

    /**
     * Date of birth.
     *
     * @var string
     */
    public $birthDate;

    /**
     * The place where the person was born.
     *
     * @var Place
     */
    public $birthPlace;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by
     * an organization or business person.
     *
     * @var Brand|Organization
     */
    public $brand;

    /**
     * A child of the person.
     *
     * @var Person
     */
    public $children;

    /**
     * A colleague of the person. Supersedes colleagues.
     *
     * @var Person|string
     */
    public $colleague;

    /**
     * A contact point for a person or organization. Supersedes contactPoints.
     *
     * @var ContactPoint
     */
    public $contactPoint;

    /**
     * Date of death.
     *
     * @var string
     */
    public $deathDate;

    /**
     * The place where the person died.
     *
     * @var Place
     */
    public $deathPlace;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business
     * person.
     *
     * @var string
     */
    public $duns;

    /**
     * Email address.
     *
     * @var string
     */
    public $email;

    /**
     * Family name. In the U.S., the last name of an Person. This can be used along
     * with givenName instead of the name property.
     *
     * @var string
     */
    public $familyName;

    /**
     * The fax number.
     *
     * @var string
     */
    public $faxNumber;

    /**
     * The most generic uni-directional social relation.
     *
     * @var Person
     */
    public $follows;

    /**
     * A person or organization that supports (sponsors) something through some kind of
     * financial contribution.
     *
     * @var Organization|Person
     */
    public $funder;

    /**
     * Gender of the person. While http://schema.org/Male and http://schema.org/Female
     * may be used, text strings are also acceptable for people who do not identify as
     * a binary gender.
     *
     * @var GenderType|string
     */
    public $gender;

    /**
     * Given name. In the U.S., the first name of a Person. This can be used along with
     * familyName instead of the name property.
     *
     * @var string
     */
    public $givenName;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International
     * Location Number or ILN) of the respective organization, person, or place. The
     * GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var string
     */
    public $globalLocationNumber;

    /**
     * The Person's occupation. For past professions, use Role for expressing dates.
     *
     * @var Occupation
     */
    public $hasOccupation;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     * @var OfferCatalog
     */
    public $hasOfferCatalog;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @var Place
     */
    public $hasPOS;

    /**
     * The height of the item.
     *
     * @var Distance|QuantitativeValue
     */
    public $height;

    /**
     * A contact location for a person's residence.
     *
     * @var ContactPoint|Place
     */
    public $homeLocation;

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @var string
     */
    public $honorificPrefix;

    /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     *
     * @var string
     */
    public $honorificSuffix;

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization, business
     * person, or place.
     *
     * @var string
     */
    public $isicV4;

    /**
     * The job title of the person (for example, Financial Manager).
     *
     * @var string
     */
    public $jobTitle;

    /**
     * The most generic bi-directional social/work relation.
     *
     * @var Person
     */
    public $knows;

    /**
     * Of a Person, and less typically of an Organization, to indicate a topic that is
     * known about - suggesting possible expertise but not implying it. We do not
     * distinguish skill levels here, or yet relate this to educational content,
     * events, objectives or JobPosting descriptions.
     *
     * @var string|Thing|string
     */
    public $knowsAbout;

    /**
     * Of a Person, and less typically of an Organization, to indicate a known
     * language. We do not distinguish skill levels or reading/writing/speaking/signing
     * here. Use language codes from the IETF BCP 47 standard.
     *
     * @var Language|string
     */
    public $knowsLanguage;

    /**
     * A pointer to products or services offered by the organization or person. Inverse
     * property: offeredBy.
     *
     * @var Offer
     */
    public $makesOffer;

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization
     * belongs. Inverse property: member.
     *
     * @var Organization|ProgramMembership
     */
    public $memberOf;

    /**
     * The North American Industry Classification System (NAICS) code for a particular
     * organization or business person.
     *
     * @var string
     */
    public $naics;

    /**
     * Nationality of the person.
     *
     * @var Country
     */
    public $nationality;

    /**
     * The total financial value of the person as calculated by subtracting assets from
     * liabilities.
     *
     * @var MonetaryAmount|PriceSpecification
     */
    public $netWorth;

    /**
     * Products owned by the organization or person.
     *
     * @var OwnershipInfo|Product
     */
    public $owns;

    /**
     * A parent of this person. Supersedes parents.
     *
     * @var Person
     */
    public $parent;

    /**
     * Event that this person is a performer or participant in.
     *
     * @var Event
     */
    public $performerIn;

    /**
     * The publishingPrinciples property indicates (typically via URL) a document
     * describing the editorial principles of an Organization (or individual e.g. a
     * Person writing a blog) that relate to their activities as a publisher, e.g.
     * ethics or diversity policies. When applied to a CreativeWork (e.g. NewsArticle)
     * the principles are those of the party primarily responsible for the creation of
     * the CreativeWork.
     * 
     * While such policies are most typically expressed in natural language, sometimes
     * related information (e.g. indicating a funder) can be expressed using schema.org
     * terminology.
     *
     * @var CreativeWork|string
     */
    public $publishingPrinciples;

    /**
     * The most generic familial relation.
     *
     * @var Person
     */
    public $relatedTo;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @var Demand
     */
    public $seeks;

    /**
     * A sibling of the person. Supersedes siblings.
     *
     * @var Person
     */
    public $sibling;

    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor
     * of an event.
     *
     * @var Organization|Person
     */
    public $sponsor;

    /**
     * The person's spouse.
     *
     * @var Person
     */
    public $spouse;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the
     * CIF/NIF in Spain.
     *
     * @var string
     */
    public $taxID;

    /**
     * The telephone number.
     *
     * @var string
     */
    public $telephone;

    /**
     * The Value-added Tax ID of the organization or person.
     *
     * @var string
     */
    public $vatID;

    /**
     * The weight of the product or person.
     *
     * @var QuantitativeValue
     */
    public $weight;

    /**
     * A contact location for a person's place of work.
     *
     * @var ContactPoint|Place
     */
    public $workLocation;

    /**
     * Organizations that the person works for.
     *
     * @var Organization
     */
    public $worksFor;


}