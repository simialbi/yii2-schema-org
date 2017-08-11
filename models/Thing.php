<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Thing
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Thing
 */
class Thing extends Model {
	/**
	* @var string An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
	*/
	public $additionalType;

	/**
	* @var string An alias for the item.
	*/
	public $alternateName;

	/**
	* @var string A description of the item.
	*/
	public $description;

	/**
	* @var string A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.
	*/
	public $disambiguatingDescription;

	/**
	* @var PropertyValue|string The identifier property represents any kind of identifier for any kind of Thing, such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See background notes for more details.
	*/
	public $identifier;

	/**
	* @var ImageObject|string An image of the item. This can be a URL or a fully described ImageObject.
	*/
	public $image;

	/**
	* @var CreativeWork|string Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See background notes for details. Inverse property: mainEntity.
	*/
	public $mainEntityOfPage;

	/**
	* @var string The name of the item.
	*/
	public $name;

	/**
	* @var Action Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
	*/
	public $potentialAction;

	/**
	* @var string URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
	*/
	public $sameAs;

	/**
	* @var string URL of the item.
	*/
	public $url;

}