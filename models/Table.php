<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Table
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Table
 */
class Table extends WebPageElement {
	/**
	* @var Thing The subject matter of the content.
	*/
	public $about;

	/**
	* @var string The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Expected values include: auditory, tactile, textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
	*/
	public $accessMode;

	/**
	* @var string A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Expected values include:  auditory, tactile, textual, visual.
	*/
	public $accessModeSufficient;

	/**
	* @var string Indicates that the resource is compatible with the referenced accessibility API (WebSchemas wiki lists possible values).
	*/
	public $accessibilityAPI;

	/**
	* @var string Identifies input methods that are sufficient to fully control the described resource (WebSchemas wiki lists possible values).
	*/
	public $accessibilityControl;

	/**
	* @var string Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (WebSchemas wiki lists possible values).
	*/
	public $accessibilityFeature;

	/**
	* @var string A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 (WebSchemas wiki lists possible values).
	*/
	public $accessibilityHazard;

	/**
	* @var string A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed."
	*/
	public $accessibilitySummary;

	/**
	* @var Person Specifies the Person that is legally accountable for the CreativeWork.
	*/
	public $accountablePerson;

	/**
	* @var AggregateRating The overall rating, based on a collection of reviews or ratings, of the item.
	*/
	public $aggregateRating;

	/**
	* @var string A secondary title of the CreativeWork.
	*/
	public $alternativeHeadline;

	/**
	* @var MediaObject A media object that encodes this CreativeWork. This property is a synonym for encoding.
	*/
	public $associatedMedia;

	/**
	* @var Audience An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	*/
	public $audience;

	/**
	* @var AudioObject An embedded audio object.
	*/
	public $audio;

	/**
	* @var Organization|Person The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
	*/
	public $author;

	/**
	* @var string An award won by or for this item. Supersedes awards.
	*/
	public $award;

	/**
	* @var Person Fictional person connected with a creative work.
	*/
	public $character;

	/**
	* @var CreativeWork|string A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
	*/
	public $citation;

	/**
	* @var Comment Comments, typically from users.
	*/
	public $comment;

	/**
	* @var integer The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
	*/
	public $commentCount;

	/**
	* @var Place The location depicted or described in the content. For example, the location in a photograph or painting.
	*/
	public $contentLocation;

	/**
	* @var string Official rating of a piece of content—for example,'MPAA PG-13'.
	*/
	public $contentRating;

	/**
	* @var string The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within an Event.
	*/
	public $contentReferenceTime;

	/**
	* @var Organization|Person A secondary contributor to the CreativeWork or Event.
	*/
	public $contributor;

	/**
	* @var Organization|Person The party holding the legal copyright to the CreativeWork.
	*/
	public $copyrightHolder;

	/**
	* @var integer The year during which the claimed copyright for the CreativeWork was first asserted.
	*/
	public $copyrightYear;

	/**
	* @var Organization|Person The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
	*/
	public $creator;

	/**
	* @var string The date on which the CreativeWork was created or the item was added to a DataFeed.
	*/
	public $dateCreated;

	/**
	* @var string The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
	*/
	public $dateModified;

	/**
	* @var string Date of first broadcast/publication.
	*/
	public $datePublished;

	/**
	* @var string A link to the page containing the comments of the CreativeWork.
	*/
	public $discussionUrl;

	/**
	* @var Person Specifies the Person who edited the CreativeWork.
	*/
	public $editor;

	/**
	* @var AlignmentObject An alignment to an established educational framework.
	*/
	public $educationalAlignment;

	/**
	* @var string The purpose of a work in the context of education; for example, 'assignment', 'group work'.
	*/
	public $educationalUse;

	/**
	* @var MediaObject A media object that encodes this CreativeWork. This property is a synonym for associatedMedia. Supersedes encodings.
	*/
	public $encoding;

	/**
	* @var CreativeWork A creative work that this work is an example/instance/realization/derivation of. Inverse property: workExample.
	*/
	public $exampleOfWork;

	/**
	* @var string Date the content expires and is no longer useful or available. For example a VideoObject or NewsArticle whose availability or relevance is time-limited, or a ClaimReview fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date.
	*/
	public $expires;

	/**
	* @var string Media type, typically MIME format (see IANA site) of the content e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.
	*/
	public $fileFormat;

	/**
	* @var Organization|Person A person or organization that supports (sponsors) something through some kind of financial contribution.
	*/
	public $funder;

	/**
	* @var string Genre of the creative work, broadcast channel or group.
	*/
	public $genre;

	/**
	* @var CreativeWork Indicates a CreativeWork that is (in some sense) a part of this CreativeWork. Inverse property: isPartOf.
	*/
	public $hasPart;

	/**
	* @var string Headline of the article.
	*/
	public $headline;

	/**
	* @var Language|string The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard. See also availableLanguage. Supersedes language.
	*/
	public $inLanguage;

	/**
	* @var InteractionCounter The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used. Supersedes interactionCount.
	*/
	public $interactionStatistic;

	/**
	* @var string The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
	*/
	public $interactivityType;

	/**
	* @var boolean A flag to signal that the item, event, or place is accessible for free. Supersedes free.
	*/
	public $isAccessibleForFree;

	/**
	* @var CreativeWork|Product|string A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html. Supersedes isBasedOnUrl.
	*/
	public $isBasedOn;

	/**
	* @var boolean Indicates whether this content is family friendly.
	*/
	public $isFamilyFriendly;

	/**
	* @var CreativeWork Indicates a CreativeWork that this CreativeWork is (in some sense) part of. Inverse property: hasPart.
	*/
	public $isPartOf;

	/**
	* @var string Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
	*/
	public $keywords;

	/**
	* @var string The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
	*/
	public $learningResourceType;

	/**
	* @var CreativeWork|string A license document that applies to this content, typically indicated by URL.
	*/
	public $license;

	/**
	* @var Place The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
	*/
	public $locationCreated;

	/**
	* @var Thing Indicates the primary entity described in some page or other CreativeWork. Inverse property: mainEntityOfPage.
	*/
	public $mainEntity;

	/**
	* @var Product|string A material that something is made from, e.g. leather, wool, cotton, paper.
	*/
	public $material;

	/**
	* @var Thing Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
	*/
	public $mentions;

	/**
	* @var Offer An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
	*/
	public $offers;

	/**
	* @var integer|string The position of an item in a series or sequence of items.
	*/
	public $position;

	/**
	* @var Organization|Person The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
	*/
	public $producer;

	/**
	* @var Organization|Person The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	*/
	public $provider;

	/**
	* @var PublicationEvent A publication event associated with the item.
	*/
	public $publication;

	/**
	* @var Organization|Person The publisher of the creative work.
	*/
	public $publisher;

	/**
	* @var Organization The publishing division which published the comic.
	*/
	public $publisherImprint;

	/**
	* @var CreativeWork|string The publishingPrinciples property indicates (typically via URL) a document describing the editorial principles of an Organization (or individual e.g. a Person writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a CreativeWork (e.g. NewsArticle) the principles are those of the party primarily responsible for the creation of the CreativeWork.
	* 
	* While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a funder) can be expressed using schema.org terminology.
	*/
	public $publishingPrinciples;

	/**
	* @var Event The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event. Inverse property: recordedIn.
	*/
	public $recordedAt;

	/**
	* @var PublicationEvent The place and time the release was issued, expressed as a PublicationEvent.
	*/
	public $releasedEvent;

	/**
	* @var Review A review of the item. Supersedes reviews.
	*/
	public $review;

	/**
	* @var string Indicates (by URL or string) a particular version of a schema used in some CreativeWork. For example, a document could declare a schemaVersion using an URL such as http://schema.org/version/2.0/ if precise indication of schema version was required by some application.
	*/
	public $schemaVersion;

	/**
	* @var Organization The Organization on whose behalf the creator was working.
	*/
	public $sourceOrganization;

	/**
	* @var Place The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of
	*       contentLocation intended primarily for more technical and detailed materials. For example with a Dataset, it indicates
	*       areas that the dataset describes: a dataset of New York weather would have spatialCoverage which was the place: the state of New York. Supersedes spatial.
	*/
	public $spatialCoverage;

	/**
	* @var Organization|Person A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	*/
	public $sponsor;

	/**
	* @var string The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in ISO 8601 time interval format. In
	*       the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage in broader terms - textually or via well-known URL.
	*       Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945". Supersedes datasetTimeInterval, temporal.
	*/
	public $temporalCoverage;

	/**
	* @var string The textual content of this CreativeWork.
	*/
	public $text;

	/**
	* @var string A thumbnail image relevant to the Thing.
	*/
	public $thumbnailUrl;

	/**
	* @var Duration Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
	*/
	public $timeRequired;

	/**
	* @var CreativeWork The work that this work has been translated from. e.g. 物种起源 is a translationOf “On the Origin of Species” Inverse property: workTranslation.
	*/
	public $translationOfWork;

	/**
	* @var Organization|Person Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
	*/
	public $translator;

	/**
	* @var string The typical expected age range, e.g. '7-9', '11-'.
	*/
	public $typicalAgeRange;

	/**
	* @var integer|string The version of the CreativeWork embodied by a specified resource.
	*/
	public $version;

	/**
	* @var VideoObject An embedded video object.
	*/
	public $video;

	/**
	* @var CreativeWork Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook. Inverse property: exampleOfWork.
	*/
	public $workExample;

	/**
	* @var CreativeWork A work that is a translation of the content of this work. e.g. 西遊記 has an English workTranslation “Journey to the West”,a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình khảo. Inverse property: translationOfWork.
	*/
	public $workTranslation;

}