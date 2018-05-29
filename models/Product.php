<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Product
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Product
 */
class Product extends Thing {
	/**
	* @var PropertyValue A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.
	* 
	* Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
	*/
	public $additionalProperty;

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
	* @var Brand|Organization The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	*/
	public $brand;

	/**
	* @var string|Thing A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	*/
	public $category;

	/**
	* @var string The color of the product.
	*/
	public $color;

	/**
	* @var Distance|QuantitativeValue The depth of the item.
	*/
	public $depth;

	/**
	* @var string The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See GS1 GTIN Summary for more details.
	*/
	public $gtin12;

	/**
	* @var string The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See GS1 GTIN Summary for more details.
	*/
	public $gtin13;

	/**
	* @var string The GTIN-14 code of the product, or the product to which the offer refers. See GS1 GTIN Summary for more details.
	*/
	public $gtin14;

	/**
	* @var string The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See GS1 GTIN Summary for more details.
	*/
	public $gtin8;

	/**
	* @var Distance|QuantitativeValue The height of the item.
	*/
	public $height;

	/**
	* @var Product A pointer to another product (or multiple products) for which this product is an accessory or spare part.
	*/
	public $isAccessoryOrSparePartFor;

	/**
	* @var Product A pointer to another product (or multiple products) for which this product is a consumable.
	*/
	public $isConsumableFor;

	/**
	* @var Product|Service A pointer to another, somehow related product (or multiple products).
	*/
	public $isRelatedTo;

	/**
	* @var Product|Service A pointer to another, functionally similar product (or multiple products).
	*/
	public $isSimilarTo;

	/**
	* @var OfferItemCondition A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
	*/
	public $itemCondition;

	/**
	* @var ImageObject|string An associated logo.
	*/
	public $logo;

	/**
	* @var Organization The manufacturer of the product.
	*/
	public $manufacturer;

	/**
	* @var Product|string A material that something is made from, e.g. leather, wool, cotton, paper.
	*/
	public $material;

	/**
	* @var ProductModel|string The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
	*/
	public $model;

	/**
	* @var string The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
	*/
	public $mpn;

	/**
	* @var Offer An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
	*/
	public $offers;

	/**
	* @var string The product identifier, such as ISBN. For example: meta itemprop="productID" content="isbn:123-456-789".
	*/
	public $productID;

	/**
	* @var string The date of production of the item, e.g. vehicle.
	*/
	public $productionDate;

	/**
	* @var string The date the item e.g. vehicle was purchased by the current owner.
	*/
	public $purchaseDate;

	/**
	* @var string The release date of a product or product model. This can be used to distinguish the exact variant of a product.
	*/
	public $releaseDate;

	/**
	* @var Review A review of the item. Supersedes reviews.
	*/
	public $review;

	/**
	* @var string The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
	*/
	public $sku;

	/**
	* @var QuantitativeValue The weight of the product or person.
	*/
	public $weight;

	/**
	* @var Distance|QuantitativeValue The width of the item.
	*/
	public $width;

}