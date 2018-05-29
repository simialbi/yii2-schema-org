<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Continent
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Continent
 */
class Continent extends Landform {
	/**
	* @var PropertyValue A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.
	* 
	* Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
	*/
	public $additionalProperty;

	/**
	* @var PostalAddress|string Physical address of the item.
	*/
	public $address;

	/**
	* @var AggregateRating The overall rating, based on a collection of reviews or ratings, of the item.
	*/
	public $aggregateRating;

	/**
	* @var LocationFeatureSpecification An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
	*/
	public $amenityFeature;

	/**
	* @var string A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.
	* 
	* For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
	*/
	public $branchCode;

	/**
	* @var Place The basic containment relation between a place and one that contains it. Supersedes containedIn. Inverse property: containsPlace.
	*/
	public $containedInPlace;

	/**
	* @var Place The basic containment relation between a place and another that it contains. Inverse property: containedInPlace.
	*/
	public $containsPlace;

	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

	/**
	* @var string The fax number.
	*/
	public $faxNumber;

	/**
	* @var GeoCoordinates|GeoShape The geo coordinates of the place.
	*/
	public $geo;

	/**
	* @var GeospatialGeometry|Place Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in DE-9IM.
	*/
	public $geospatiallyContains;

	/**
	* @var GeospatialGeometry|Place Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in DE-9IM.
	*/
	public $geospatiallyCoveredBy;

	/**
	* @var GeospatialGeometry|Place Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in DE-9IM.
	*/
	public $geospatiallyCovers;

	/**
	* @var GeospatialGeometry|Place Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in DE-9IM.
	*/
	public $geospatiallyCrosses;

	/**
	* @var GeospatialGeometry|Place Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: they have no point in common. They form a set of disconnected geometries." (a symmetric relationship, as defined in DE-9IM)
	*/
	public $geospatiallyDisjoint;

	/**
	* @var GeospatialGeometry|Place Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in DE-9IM. "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship)
	*/
	public $geospatiallyEquals;

	/**
	* @var GeospatialGeometry|Place Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in DE-9IM.
	*/
	public $geospatiallyIntersects;

	/**
	* @var GeospatialGeometry|Place Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in DE-9IM.
	*/
	public $geospatiallyOverlaps;

	/**
	* @var GeospatialGeometry|Place Represents spatial relations in which two geometries (or the places they represent) touch: they have at least one boundary point in common, but no interior points." (a symmetric relationship, as defined in DE-9IM )
	*/
	public $geospatiallyTouches;

	/**
	* @var GeospatialGeometry|Place Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in DE-9IM.
	*/
	public $geospatiallyWithin;

	/**
	* @var string The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
	*/
	public $globalLocationNumber;

	/**
	* @var Map|string A URL to a map of the place. Supersedes map, maps.
	*/
	public $hasMap;

	/**
	* @var boolean A flag to signal that the item, event, or place is accessible for free. Supersedes free.
	*/
	public $isAccessibleForFree;

	/**
	* @var string The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
	*/
	public $isicV4;

	/**
	* @var ImageObject|string An associated logo.
	*/
	public $logo;

	/**
	* @var integer The total number of individuals that may attend an event or venue.
	*/
	public $maximumAttendeeCapacity;

	/**
	* @var OpeningHoursSpecification The opening hours of a certain place.
	*/
	public $openingHoursSpecification;

	/**
	* @var ImageObject|Photograph A photograph of this place. Supersedes photos.
	*/
	public $photo;

	/**
	* @var boolean A flag to signal that the Place is open to public visitors.  If this property is omitted there is no assumed default boolean value
	*/
	public $publicAccess;

	/**
	* @var Review A review of the item. Supersedes reviews.
	*/
	public $review;

	/**
	* @var boolean Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
	*/
	public $smokingAllowed;

	/**
	* @var OpeningHoursSpecification The special opening hours of a certain place.
	* 
	* Use this to explicitly override general opening hours brought in scope by openingHoursSpecification or openingHours.
	*/
	public $specialOpeningHoursSpecification;

	/**
	* @var string The telephone number.
	*/
	public $telephone;

}