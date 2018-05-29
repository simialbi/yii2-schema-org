<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MusicEvent
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicEvent
 */
class MusicEvent extends Event {
	/**
	* @var Thing The subject matter of the content.
	*/
	public $about;

	/**
	* @var Person An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	*/
	public $actor;

	/**
	* @var AggregateRating The overall rating, based on a collection of reviews or ratings, of the item.
	*/
	public $aggregateRating;

	/**
	* @var Organization|Person A person or organization attending the event. Supersedes attendees.
	*/
	public $attendee;

	/**
	* @var Audience An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	*/
	public $audience;

	/**
	* @var Organization|Person The person or organization who wrote a composition, or who is the composer of a work performed at some event.
	*/
	public $composer;

	/**
	* @var Organization|Person A secondary contributor to the CreativeWork or Event.
	*/
	public $contributor;

	/**
	* @var Person A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	*/
	public $director;

	/**
	* @var string The time admission will commence.
	*/
	public $doorTime;

	/**
	* @var Duration The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	*/
	public $duration;

	/**
	* @var string The end date and time of the item (in ISO 8601 date format).
	*/
	public $endDate;

	/**
	* @var EventStatusType An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
	*/
	public $eventStatus;

	/**
	* @var Organization|Person A person or organization that supports (sponsors) something through some kind of financial contribution.
	*/
	public $funder;

	/**
	* @var Language|string The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard. See also availableLanguage. Supersedes language.
	*/
	public $inLanguage;

	/**
	* @var boolean A flag to signal that the item, event, or place is accessible for free. Supersedes free.
	*/
	public $isAccessibleForFree;

	/**
	* @var Place|PostalAddress|string The location of for example where the event is happening, an organization is located, or where an action takes place.
	*/
	public $location;

	/**
	* @var integer The total number of individuals that may attend an event or venue.
	*/
	public $maximumAttendeeCapacity;

	/**
	* @var Offer An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
	*/
	public $offers;

	/**
	* @var Organization|Person An organizer of an Event.
	*/
	public $organizer;

	/**
	* @var Organization|Person A performer at the event—for example, a presenter, musician, musical group or actor. Supersedes performers.
	*/
	public $performer;

	/**
	* @var string Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
	*/
	public $previousStartDate;

	/**
	* @var CreativeWork The CreativeWork that captured all or part of this Event. Inverse property: recordedAt.
	*/
	public $recordedIn;

	/**
	* @var integer The number of attendee places for an event that remain unallocated.
	*/
	public $remainingAttendeeCapacity;

	/**
	* @var Review A review of the item. Supersedes reviews.
	*/
	public $review;

	/**
	* @var Organization|Person A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	*/
	public $sponsor;

	/**
	* @var string The start date and time of the item (in ISO 8601 date format).
	*/
	public $startDate;

	/**
	* @var Event An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference. Supersedes subEvents. Inverse property: superEvent.
	*/
	public $subEvent;

	/**
	* @var Event An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent. Inverse property: subEvent.
	*/
	public $superEvent;

	/**
	* @var Organization|Person Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
	*/
	public $translator;

	/**
	* @var string The typical expected age range, e.g. '7-9', '11-'.
	*/
	public $typicalAgeRange;

	/**
	* @var CreativeWork A work featured in some event, e.g. exhibited in an ExhibitionEvent.
	*        Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
	*/
	public $workFeatured;

	/**
	* @var CreativeWork A work performed in some event, for example a play performed in a TheaterEvent.
	*/
	public $workPerformed;

}