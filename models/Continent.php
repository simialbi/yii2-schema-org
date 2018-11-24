<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * One of the continents (for example, Europe or Africa).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Continent
 */
class Continent extends Landform {
    /**
     * A property-value pair representing an additional characteristics of the
     * entitity, e.g. a product feature or another characteristic for which there is no
     * matching property in schema.org.
     * 
     * Note: Publishers should be aware that applications designed to use specific
     * schema.org properties (e.g. http://schema.org/width, http://schema.org/color,
     * http://schema.org/gtin13, ...) will typically expect such data to be provided
     * using those properties, rather than using the generic property/value mechanism.
     *
     * @var PropertyValue
     */
    public $additionalProperty;

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
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This
     * generic property does not make a statement about whether the feature is included
     * in an offer for the main accommodation or available at extra costs.
     *
     * @var LocationFeatureSpecification
     */
    public $amenityFeature;

    /**
     * A short textual code (also called "store code") that uniquely identifies a place
     * of business. The code is typically assigned by the parentOrganization and used
     * in structured URLs.
     * 
     * For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047
     * the code "3047" is a branchCode for a particular branch.
     *
     * @var string
     */
    public $branchCode;

    /**
     * The basic containment relation between a place and one that contains it.
     * Supersedes containedIn. Inverse property: containsPlace.
     *
     * @var Place
     */
    public $containedInPlace;

    /**
     * The basic containment relation between a place and another that it contains.
     * Inverse property: containedInPlace.
     *
     * @var Place
     */
    public $containsPlace;

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
     * The geo coordinates of the place.
     *
     * @var GeoCoordinates|GeoShape
     */
    public $geo;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a containing geometry to a contained geometry. "a contains b iff no
     * points of b lie in the exterior of a, and at least one point of the interior of
     * b lies in the interior of a". As defined in DE-9IM.
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyContains;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a geometry to another that covers it. As defined in DE-9IM.
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyCoveredBy;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a covering geometry to a covered geometry. "Every point of b is a point
     * of (the interior or boundary of) a". As defined in DE-9IM.
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyCovers;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a geometry to another that crosses it: "a crosses b: they have some but
     * not all interior points in common, and the dimension of the intersection is less
     * than that of at least one of them". As defined in DE-9IM.
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyCrosses;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically disjoint: they have no point in common. They form a
     * set of disconnected geometries." (a symmetric relationship, as defined in
     * DE-9IM)
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyDisjoint;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically equal, as defined in DE-9IM. "Two geometries are
     * topologically equal if their interiors intersect and no part of the interior or
     * boundary of one geometry intersects the exterior of the other" (a symmetric
     * relationship)
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyEquals;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) have at least one point in common. As defined in DE-9IM.
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyIntersects;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a geometry to another that geospatially overlaps it, i.e. they have
     * some but not all points in common. As defined in DE-9IM.
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyOverlaps;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) touch: they have at least one boundary point in common, but no
     * interior points." (a symmetric relationship, as defined in DE-9IM )
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyTouches;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a geometry to one that contains it, i.e. it is inside (i.e. within) its
     * interior. As defined in DE-9IM.
     *
     * @var GeospatialGeometry|Place
     */
    public $geospatiallyWithin;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International
     * Location Number or ILN) of the respective organization, person, or place. The
     * GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var string
     */
    public $globalLocationNumber;

    /**
     * A URL to a map of the place. Supersedes map, maps.
     *
     * @var Map|string
     */
    public $hasMap;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * Supersedes free.
     *
     * @var boolean
     */
    public $isAccessibleForFree;

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization, business
     * person, or place.
     *
     * @var string
     */
    public $isicV4;

    /**
     * An associated logo.
     *
     * @var ImageObject|string
     */
    public $logo;

    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @var integer
     */
    public $maximumAttendeeCapacity;

    /**
     * The opening hours of a certain place.
     *
     * @var OpeningHoursSpecification
     */
    public $openingHoursSpecification;

    /**
     * A photograph of this place. Supersedes photos.
     *
     * @var ImageObject|Photograph
     */
    public $photo;

    /**
     * A flag to signal that the Place is open to public visitors.  If this property is
     * omitted there is no assumed default boolean value
     *
     * @var boolean
     */
    public $publicAccess;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     */
    public $review;

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant,
     * hotel or hotel room.
     *
     * @var boolean
     */
    public $smokingAllowed;

    /**
     * The special opening hours of a certain place.
     * 
     * Use this to explicitly override general opening hours brought in scope by
     * openingHoursSpecification or openingHours.
     *
     * @var OpeningHoursSpecification
     */
    public $specialOpeningHoursSpecification;

    /**
     * The telephone number.
     *
     * @var string
     */
    public $telephone;

}