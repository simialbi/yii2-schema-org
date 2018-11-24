<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An explanation in the instructions for how to achieve a result. It provides
 * supplementary information about a technique, supply, author's preference, etc.
 * It can explain what could be done, or what should not be done, but doesn't
 * specify what should be done (see HowToDirection).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowToTip
 */
class HowToTip extends CreativeWork {
    /**
     * The subject matter of the content. Inverse property: subjectOf.
     *
     * @var Thing
     */
    public $about;

    /**
     * The human sensory perceptual system or cognitive faculty through which a person
     * may process or perceive information. Expected values include: auditory, tactile,
     * textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual,
     * mathOnVisual, musicOnVisual, textOnVisual.
     *
     * @var string
     */
    public $accessMode;

    /**
     * A list of single or combined accessModes that are sufficient to understand all
     * the intellectual content of a resource. Expected values include:  auditory,
     * tactile, textual, visual.
     *
     * @var string
     */
    public $accessModeSufficient;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API
     * (WebSchemas wiki lists possible values).
     *
     * @var string
     */
    public $accessibilityAPI;

    /**
     * Identifies input methods that are sufficient to fully control the described
     * resource (WebSchemas wiki lists possible values).
     *
     * @var string
     */
    public $accessibilityControl;

    /**
     * Content features of the resource, such as accessible media, alternatives and
     * supported enhancements for accessibility (WebSchemas wiki lists possible
     * values).
     *
     * @var string
     */
    public $accessibilityFeature;

    /**
     * A characteristic of the described resource that is physiologically dangerous to
     * some users. Related to WCAG 2.0 guideline 2.3 (WebSchemas wiki lists possible
     * values).
     *
     * @var string
     */
    public $accessibilityHazard;

    /**
     * A human-readable summary of specific accessibility features or deficiencies,
     * consistent with the other accessibility metadata but expressing subtleties such
     * as "short descriptions are present but long descriptions will be needed for
     * non-visual users" or "short descriptions are present and no long descriptions
     * are needed."
     *
     * @var string
     */
    public $accessibilitySummary;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @var Person
     */
    public $accountablePerson;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    public $aggregateRating;

    /**
     * A secondary title of the CreativeWork.
     *
     * @var string
     */
    public $alternativeHeadline;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for
     * encoding.
     *
     * @var MediaObject
     */
    public $associatedMedia;

    /**
     * An intended audience, i.e. a group for whom something was created. Supersedes
     * serviceAudience.
     *
     * @var Audience
     */
    public $audience;

    /**
     * An embedded audio object.
     *
     * @var AudioObject
     */
    public $audio;

    /**
     * The author of this content or rating. Please note that author is special in that
     * HTML 5 provides a special mechanism for indicating authorship via the rel tag.
     * That is equivalent to this and may be used interchangeably.
     *
     * @var Organization|Person
     */
    public $author;

    /**
     * An award won by or for this item. Supersedes awards.
     *
     * @var string
     */
    public $award;

    /**
     * Fictional person connected with a creative work.
     *
     * @var Person
     */
    public $character;

    /**
     * A citation or reference to another creative work, such as another publication,
     * web page, scholarly article, etc.
     *
     * @var CreativeWork|string
     */
    public $citation;

    /**
     * Comments, typically from users.
     *
     * @var Comment
     */
    public $comment;

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has
     * received. This is most applicable to works published in Web sites with
     * commenting system; additional comments may exist elsewhere.
     *
     * @var integer
     */
    public $commentCount;

    /**
     * The location depicted or described in the content. For example, the location in
     * a photograph or painting.
     *
     * @var Place
     */
    public $contentLocation;

    /**
     * Official rating of a piece of content—for example,'MPAA PG-13'.
     *
     * @var Rating|string
     */
    public $contentRating;

    /**
     * The specific time described by a creative work, for works (e.g. articles, video
     * objects etc.) that emphasise a particular moment within an Event.
     *
     * @var string
     */
    public $contentReferenceTime;

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @var Organization|Person
     */
    public $contributor;

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @var Organization|Person
     */
    public $copyrightHolder;

    /**
     * The year during which the claimed copyright for the CreativeWork was first
     * asserted.
     *
     * @var integer
     */
    public $copyrightYear;

    /**
     * Indicates a correction to a CreativeWork, either via a CorrectionComment,
     * textually or in another document.
     *
     * @var CorrectionComment|string
     */
    public $correction;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property
     * for CreativeWork.
     *
     * @var Organization|Person
     */
    public $creator;

    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @var string
     */
    public $dateCreated;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's
     * entry was modified within a DataFeed.
     *
     * @var string
     */
    public $dateModified;

    /**
     * Date of first broadcast/publication.
     *
     * @var string
     */
    public $datePublished;

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @var string
     */
    public $discussionUrl;

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @var Person
     */
    public $editor;

    /**
     * An alignment to an established educational framework.
     *
     * @var AlignmentObject
     */
    public $educationalAlignment;

    /**
     * The purpose of a work in the context of education; for example, 'assignment',
     * 'group work'.
     *
     * @var string
     */
    public $educationalUse;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for
     * associatedMedia. Supersedes encodings.
     *
     * @var MediaObject
     */
    public $encoding;

    /**
     * Media type typically expressed using a MIME format (see IANA site and MDN
     * reference) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for
     * .mp3 etc.).
     * 
     * In cases where a CreativeWork has several media type representations, encoding
     * can be used to indicate each MediaObject alongside particular encodingFormat
     * information.
     * 
     * Unregistered or niche encoding and file formats can be indicated instead via the
     * most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     * Supersedes fileFormat.
     *
     * @var string
     */
    public $encodingFormat;

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     * Inverse property: workExample.
     *
     * @var CreativeWork
     */
    public $exampleOfWork;

    /**
     * Date the content expires and is no longer useful or available. For example a
     * VideoObject or NewsArticle whose availability or relevance is time-limited, or a
     * ClaimReview fact check whose publisher wants to indicate that it may no longer
     * be relevant (or helpful to highlight) after some date.
     *
     * @var string
     */
    public $expires;

    /**
     * A person or organization that supports (sponsors) something through some kind of
     * financial contribution.
     *
     * @var Organization|Person
     */
    public $funder;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @var string
     */
    public $genre;

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in
     * some sense). Inverse property: isPartOf.
     *
     * @var CreativeWork|Trip
     */
    public $hasPart;

    /**
     * Headline of the article.
     *
     * @var string
     */
    public $headline;

    /**
     * The language of the content or performance or used in an action. Please use one
     * of the language codes from the IETF BCP 47 standard. See also availableLanguage.
     * Supersedes language.
     *
     * @var Language|string
     */
    public $inLanguage;

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter should
     * be used. Supersedes interactionCount.
     *
     * @var InteractionCounter
     */
    public $interactionStatistic;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable
     * values are 'active', 'expositive', or 'mixed'.
     *
     * @var string
     */
    public $interactivityType;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * Supersedes free.
     *
     * @var boolean
     */
    public $isAccessibleForFree;

    /**
     * A resource that was used in the creation of this resource. This term can be
     * repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html. Supersedes isBasedOnUrl.
     *
     * @var CreativeWork|Product|string
     */
    public $isBasedOn;

    /**
     * Indicates whether this content is family friendly.
     *
     * @var boolean
     */
    public $isFamilyFriendly;

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some
     * sense), is part of. Inverse property: hasPart.
     *
     * @var CreativeWork|Trip
     */
    public $isPartOf;

    /**
     * Keywords or tags used to describe this content. Multiple entries in a keywords
     * list are typically delimited by commas.
     *
     * @var string
     */
    public $keywords;

    /**
     * The predominant type or kind characterizing the learning resource. For example,
     * 'presentation', 'handout'.
     *
     * @var string
     */
    public $learningResourceType;

    /**
     * A license document that applies to this content, typically indicated by URL.
     *
     * @var CreativeWork|string
     */
    public $license;

    /**
     * The location where the CreativeWork was created, which may not be the same as
     * the location depicted in the CreativeWork.
     *
     * @var Place
     */
    public $locationCreated;

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     * Inverse property: mainEntityOfPage.
     *
     * @var Thing
     */
    public $mainEntity;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     * @var Product|string
     */
    public $material;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily
     * about a concept.
     *
     * @var Thing
     */
    public $mentions;

    /**
     * An offer to provide this item—for example, an offer to sell a product, rent
     * the DVD of a movie, perform a service, or give away tickets to an event.
     *
     * @var Offer
     */
    public $offers;

    /**
     * The position of an item in a series or sequence of items.
     *
     * @var integer|string
     */
    public $position;

    /**
     * The person or organization who produced the work (e.g. music album, movie,
     * tv/radio series etc.).
     *
     * @var Organization|Person
     */
    public $producer;

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on behalf
     * of the provider. A provider may also serve as the seller. Supersedes carrier.
     *
     * @var Organization|Person
     */
    public $provider;

    /**
     * A publication event associated with the item.
     *
     * @var PublicationEvent
     */
    public $publication;

    /**
     * The publisher of the creative work.
     *
     * @var Organization|Person
     */
    public $publisher;

    /**
     * The publishing division which published the comic.
     *
     * @var Organization
     */
    public $publisherImprint;

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
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all
     * or part of the event. Inverse property: recordedIn.
     *
     * @var Event
     */
    public $recordedAt;

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     *
     * @var PublicationEvent
     */
    public $releasedEvent;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     */
    public $review;

    /**
     * Indicates (by URL or string) a particular version of a schema used in some
     * CreativeWork. For example, a document could declare a schemaVersion using an URL
     * such as http://schema.org/version/2.0/ if precise indication of schema version
     * was required by some application.
     *
     * @var string
     */
    public $schemaVersion;

    /**
     * Indicates the date on which the current structured data was generated /
     * published. Typically used alongside sdPublisher
     *
     * @var string
     */
    public $sdDatePublished;

    /**
     * A license document that applies to this structured data, typically indicated by
     * URL.
     *
     * @var CreativeWork|string
     */
    public $sdLicense;

    /**
     * Indicates the party responsible for generating and publishing the current
     * structured data markup, typically in cases where the structured data is derived
     * automatically from existing published content but published on a different site.
     * For example, student projects and open data initiatives often re-publish
     * existing content with more explicitly structured metadata. The
     * sdPublisher property helps make such practices more explicit.
     *
     * @var Organization|Person
     */
    public $sdPublisher;

    /**
     * The Organization on whose behalf the creator was working.
     *
     * @var Organization
     */
    public $sourceOrganization;

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus
     * of the content. It is a subproperty of
     *       contentLocation intended primarily for more technical and detailed
     * materials. For example with a Dataset, it indicates
     *       areas that the dataset describes: a dataset of New York weather would have
     * spatialCoverage which was the place: the state of New York. Supersedes spatial.
     *
     * @var Place
     */
    public $spatialCoverage;

    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor
     * of an event.
     *
     * @var Organization|Person
     */
    public $sponsor;

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content
     * applies to, i.e. that it describes, either as a DateTime or as a textual string
     * indicating a time period in ISO 8601 time interval format. In
     *       the case of a Dataset it will typically indicate the relevant time period
     * in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be
     * written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book,
     * TVSeries or TVEpisode may indicate their temporalCoverage in broader terms -
     * textually or via well-known URL.
     *       Written works such as books may sometimes have precise temporal coverage
     * too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format
     * format via "1939/1945".
     * 
     * Open-ended date ranges can be written with ".." in place of the end date. For
     * example, "2015-11/.." indicates a range beginning in November 2015 and with no
     * specified final date. This is tentative and might be updated in future when ISO
     * 8601 is officially updated. Supersedes datasetTimeInterval, temporal.
     *
     * @var string
     */
    public $temporalCoverage;

    /**
     * The textual content of this CreativeWork.
     *
     * @var string
     */
    public $text;

    /**
     * A thumbnail image relevant to the Thing.
     *
     * @var string
     */
    public $thumbnailUrl;

    /**
     * Approximate or typical time it takes to work with or through this learning
     * resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
     *
     * @var Duration
     */
    public $timeRequired;

    /**
     * The work that this work has been translated from. e.g. 物种起源 is a
     * translationOf “On the Origin of Species” Inverse property: workTranslation.
     *
     * @var CreativeWork
     */
    public $translationOfWork;

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or that
     * translates during some event.
     *
     * @var Organization|Person
     */
    public $translator;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var string
     */
    public $typicalAgeRange;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @var integer|string
     */
    public $version;

    /**
     * An embedded video object.
     *
     * @var VideoObject
     */
    public $video;

    /**
     * Example/instance/realization/derivation of the concept of this creative work.
     * eg. The paperback edition, first edition, or eBook. Inverse property:
     * exampleOfWork.
     *
     * @var CreativeWork
     */
    public $workExample;

    /**
     * A work that is a translation of the content of this work. e.g. 西遊記 has an
     * English workTranslation “Journey to the West”,a German workTranslation
     * “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình
     * khảo. Inverse property: translationOfWork.
     *
     * @var CreativeWork
     */
    public $workTranslation;

}