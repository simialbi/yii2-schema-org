<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A dance group—for example, the Alvin Ailey Dance Theater or Riverdance.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DanceGroup
 */
class DanceGroup extends PerformingGroup {
    /**
     * For a NewsMediaOrganization or other news-related Organization, a statement
     * about public engagement activities (for news media, the newsroom’s), including
     * involving the public - digitally or otherwise -- in coverage decisions,
     * reporting and activities after publication.
     *
     * @var CreativeWork|string
     */
    public $actionableFeedbackPolicy;

    /**
     * Physical address of the item.
     *
     * @var PostalAddress|string
     */
    public $address;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    public $aggregateRating;

    /**
     * Alumni of an organization. Inverse property: alumniOf.
     *
     * @var Person
     */
    public $alumni;

    /**
     * The geographic area where a service or offered item is provided. Supersedes
     * serviceArea.
     *
     * @var AdministrativeArea|GeoShape|Place|string
     */
    public $areaServed;

    /**
     * An award won by or for this item. Supersedes awards.
     *
     * @var string
     */
    public $award;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by
     * an organization or business person.
     *
     * @var Brand|Organization
     */
    public $brand;

    /**
     * A contact point for a person or organization. Supersedes contactPoints.
     *
     * @var ContactPoint
     */
    public $contactPoint;

    /**
     * For an Organization (e.g. NewsMediaOrganization), a statement describing (in
     * news media, the newsroom’s) disclosure and correction policy for errors.
     *
     * @var CreativeWork|string
     */
    public $correctionsPolicy;

    /**
     * A relationship between an organization and a department of that organization,
     * also described as an organization (allowing different urls, logos, opening
     * hours). For example: a store with a pharmacy, or a bakery with a cafe.
     *
     * @var Organization
     */
    public $department;

    /**
     * The date that this organization was dissolved.
     *
     * @var string
     */
    public $dissolutionDate;

    /**
     * Statement on diversity policy by an Organization e.g. a NewsMediaOrganization.
     * For a NewsMediaOrganization, a statement describing the newsroom’s diversity
     * policy on both staffing and sources, typically providing staffing data.
     *
     * @var CreativeWork|string
     */
    public $diversityPolicy;

    /**
     * For an Organization (often but not necessarily a NewsMediaOrganization), a
     * report on staffing diversity issues. In a news context this might be for example
     * ASNE or RTDNA (US) reports, or self-reported.
     *
     * @var Article|string
     */
    public $diversityStaffingReport;

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
     * Someone working for this organization. Supersedes employees.
     *
     * @var Person
     */
    public $employee;

    /**
     * Statement about ethics policy, e.g. of a NewsMediaOrganization regarding
     * journalistic and publishing practices, or of a Restaurant, a page describing
     * food source policies. In the case of a NewsMediaOrganization, an ethicsPolicy is
     * typically a statement describing the personal, organizational, and corporate
     * standards of behavior expected by the organization.
     *
     * @var CreativeWork|string
     */
    public $ethicsPolicy;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     * Supersedes events.
     *
     * @var Event
     */
    public $event;

    /**
     * The fax number.
     *
     * @var string
     */
    public $faxNumber;

    /**
     * A person who founded this organization. Supersedes founders.
     *
     * @var Person
     */
    public $founder;

    /**
     * The date that this organization was founded.
     *
     * @var string
     */
    public $foundingDate;

    /**
     * The place where the Organization was founded.
     *
     * @var Place
     */
    public $foundingLocation;

    /**
     * A person or organization that supports (sponsors) something through some kind of
     * financial contribution.
     *
     * @var Organization|Person
     */
    public $funder;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International
     * Location Number or ILN) of the respective organization, person, or place. The
     * GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var string
     */
    public $globalLocationNumber;

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
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization, business
     * person, or place.
     *
     * @var string
     */
    public $isicV4;

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
     * The official name of the organization, e.g. the registered company name.
     *
     * @var string
     */
    public $legalName;

    /**
     * An organization identifier that uniquely identifies a legal entity as defined in
     * ISO 17442.
     *
     * @var string
     */
    public $leiCode;

    /**
     * The location of for example where the event is happening, an organization is
     * located, or where an action takes place.
     *
     * @var Place|PostalAddress|string
     */
    public $location;

    /**
     * An associated logo.
     *
     * @var ImageObject|string
     */
    public $logo;

    /**
     * A pointer to products or services offered by the organization or person. Inverse
     * property: offeredBy.
     *
     * @var Offer
     */
    public $makesOffer;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members
     * of organizations; ProgramMembership is typically for individuals. Supersedes
     * members, musicGroupMember. Inverse property: memberOf.
     *
     * @var Organization|Person
     */
    public $member;

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
     * The number of employees in an organization e.g. business.
     *
     * @var QuantitativeValue
     */
    public $numberOfEmployees;

    /**
     * For an Organization (often but not necessarily a NewsMediaOrganization), a
     * description of organizational ownership structure; funding and grants. In a
     * news/media setting, this is with particular reference to editorial independence.
     *   Note that the funder is also available and can be used to make basic funder
     * information machine-readable.
     *
     * @var AboutPage|CreativeWork|string
     */
    public $ownershipFundingInfo;

    /**
     * Products owned by the organization or person.
     *
     * @var OwnershipInfo|Product
     */
    public $owns;

    /**
     * The larger organization that this organization is a subOrganization of, if any.
     * Supersedes branchOf. Inverse property: subOrganization.
     *
     * @var Organization
     */
    public $parentOrganization;

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
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     */
    public $review;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @var Demand
     */
    public $seeks;

    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor
     * of an event.
     *
     * @var Organization|Person
     */
    public $sponsor;

    /**
     * A relationship between two organizations where the first includes the second,
     * e.g., as a subsidiary. See also: the more specific 'department' property.
     * Inverse property: parentOrganization.
     *
     * @var Organization
     */
    public $subOrganization;

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
     * For an Organization (typically a NewsMediaOrganization), a statement about
     * policy on use of unnamed sources and the decision process required.
     *
     * @var CreativeWork|string
     */
    public $unnamedSourcesPolicy;

    /**
     * The Value-added Tax ID of the organization or person.
     *
     * @var string
     */
    public $vatID;

}