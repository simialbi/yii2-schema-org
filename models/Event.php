<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An event happening at a certain time and location, such as a concert, lecture,
 * or festival. Ticketing information may be added via the offers property.
 * Repeated events may be structured as separate Event objects.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Event
 */
class Event extends Thing {
    /**
     * The subject matter of the content. Inverse property: subjectOf.
     *
     * @var Thing
     */
    public $about;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can
     * be associated with individual items or with a series, episode, clip. Supersedes
     * actors.
     *
     * @var Person
     */
    public $actor;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    public $aggregateRating;

    /**
     * A person or organization attending the event. Supersedes attendees.
     *
     * @var Organization|Person
     */
    public $attendee;

    /**
     * An intended audience, i.e. a group for whom something was created. Supersedes
     * serviceAudience.
     *
     * @var Audience
     */
    public $audience;

    /**
     * The person or organization who wrote a composition, or who is the composer of a
     * work performed at some event.
     *
     * @var Organization|Person
     */
    public $composer;

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @var Organization|Person
     */
    public $contributor;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
     * Directors can be associated with individual items or with a series, episode,
     * clip. Supersedes directors.
     *
     * @var Person
     */
    public $director;

    /**
     * The time admission will commence.
     *
     * @var string
     */
    public $doorTime;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date
     * format.
     *
     * @var Duration
     */
    public $duration;

    /**
     * The end date and time of the item (in ISO 8601 date format).
     *
     * @var string
     */
    public $endDate;

    /**
     * An eventStatus of an event represents its status; particularly useful when an
     * event is cancelled or rescheduled.
     *
     * @var EventStatusType
     */
    public $eventStatus;

    /**
     * A person or organization that supports (sponsors) something through some kind of
     * financial contribution.
     *
     * @var Organization|Person
     */
    public $funder;

    /**
     * The language of the content or performance or used in an action. Please use one
     * of the language codes from the IETF BCP 47 standard. See also availableLanguage.
     * Supersedes language.
     *
     * @var Language|string
     */
    public $inLanguage;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * Supersedes free.
     *
     * @var boolean
     */
    public $isAccessibleForFree;

    /**
     * The location of for example where the event is happening, an organization is
     * located, or where an action takes place.
     *
     * @var Place|PostalAddress|string
     */
    public $location;

    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @var integer
     */
    public $maximumAttendeeCapacity;

    /**
     * An offer to provide this item—for example, an offer to sell a product, rent
     * the DVD of a movie, perform a service, or give away tickets to an event.
     *
     * @var Offer
     */
    public $offers;

    /**
     * An organizer of an Event.
     *
     * @var Organization|Person
     */
    public $organizer;

    /**
     * A performer at the event—for example, a presenter, musician, musical group or
     * actor. Supersedes performers.
     *
     * @var Organization|Person
     */
    public $performer;

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This
     * property contains the previously scheduled start date. For rescheduled events,
     * the startDate property should be used for the newly scheduled start date. In the
     * (rare) case of an event that has been postponed and rescheduled multiple times,
     * this field may be repeated.
     *
     * @var string
     */
    public $previousStartDate;

    /**
     * The CreativeWork that captured all or part of this Event. Inverse property:
     * recordedAt.
     *
     * @var CreativeWork
     */
    public $recordedIn;

    /**
     * The number of attendee places for an event that remain unallocated.
     *
     * @var integer
     */
    public $remainingAttendeeCapacity;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     */
    public $review;

    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor
     * of an event.
     *
     * @var Organization|Person
     */
    public $sponsor;

    /**
     * The start date and time of the item (in ISO 8601 date format).
     *
     * @var string
     */
    public $startDate;

    /**
     * An Event that is part of this event. For example, a conference event includes
     * many presentations, each of which is a subEvent of the conference. Supersedes
     * subEvents. Inverse property: superEvent.
     *
     * @var Event
     */
    public $subEvent;

    /**
     * An event that this event is a part of. For example, a collection of individual
     * music performances might each have a music festival as their superEvent. Inverse
     * property: subEvent.
     *
     * @var Event
     */
    public $superEvent;

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
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
     *        Specific subproperties are available for workPerformed (e.g. a play), or
     * a workPresented (a Movie at a ScreeningEvent).
     *
     * @var CreativeWork
     */
    public $workFeatured;

    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     *
     * @var CreativeWork
     */
    public $workPerformed;

}