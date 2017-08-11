<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for SiteNavigationElement
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SiteNavigationElement
 */
class SiteNavigationElement extends WebPageElement {
	/**
	* @var string The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Expected values include: auditory, tactile, textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
	*/
	public $accessMode;

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
	* @var Person Specifies the Person that is legally accountable for the CreativeWork.
	*/
	public $accountablePerson;

	/**
	* @var AggregateRating The overall rating, based on a collection of reviews or ratings, of the item.
	*/
	public $aggregateRating;

	/**
	* @var Audience An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	*/
	public $audience;

	/**
	* @var string An award won by or for this item. Supersedes awards.
	*/
	public $award;

	/**
	* @var string Official rating of a piece of content—for example,'MPAA PG-13'.
	*/
	public $contentRating;

	/**
	* @var Organization|Person A secondary contributor to the CreativeWork or Event.
	*/
	public $contributor;

	/**
	* @var MediaObject A media object that encodes this CreativeWork. This property is a synonym for associatedMedia. Supersedes encodings.
	*/
	public $encoding;

	/**
	* @var CreativeWork Indicates a CreativeWork that is (in some sense) a part of this CreativeWork. Inverse property: isPartOf.
	*/
	public $hasPart;

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
	* @var CreativeWork|string A license document that applies to this content, typically indicated by URL.
	*/
	public $license;

	/**
	* @var Product|string A material that something is made from, e.g. leather, wool, cotton, paper.
	*/
	public $material;

	/**
	* @var Thing Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
	*/
	public $mentions;

	/**
	* @var integer|string The position of an item in a series or sequence of items.
	*/
	public $position;

	/**
	* @var Organization|Person The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
	*/
	public $producer;

	/**
	* @var Event The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event. Inverse property: recordedIn.
	*/
	public $recordedAt;

	/**
	* @var Review A review of the item. Supersedes reviews.
	*/
	public $review;

	/**
	* @var Organization|Person A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	*/
	public $sponsor;

	/**
	* @var Duration Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
	*/
	public $timeRequired;

	/**
	* @var Organization|Person Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
	*/
	public $translator;

	/**
	* @var integer|string The version of the CreativeWork embodied by a specified resource.
	*/
	public $version;

}