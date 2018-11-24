<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Any offered product or service. For example: a pair of shoes; a concert ticket;
 * the rental of a car; a haircut; or an episode of a TV show streamed online.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Product
 */
class Product extends Thing {
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
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    public $aggregateRating;

    /**
     * An intended audience, i.e. a group for whom something was created. Supersedes
     * serviceAudience.
     *
     * @var Audience
     */
    public $audience;

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
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @var PhysicalActivityCategory|string|Thing
     */
    public $category;

    /**
     * The color of the product.
     *
     * @var string
     */
    public $color;

    /**
     * The depth of the item.
     *
     * @var Distance|QuantitativeValue
     */
    public $depth;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The
     * GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company
     * Prefix, Item Reference, and Check Digit used to identify trade items. See GS1
     * GTIN Summary for more details.
     *
     * @var string
     */
    public $gtin12;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This
     * is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes
     * can be converted into a GTIN-13 code by simply adding a preceeding zero. See GS1
     * GTIN Summary for more details.
     *
     * @var string
     */
    public $gtin13;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See
     * GS1 GTIN Summary for more details.
     *
     * @var string
     */
    public $gtin14;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This
     * code is also known as EAN/UCC-8 or 8-digit EAN. See GS1 GTIN Summary for more
     * details.
     *
     * @var string
     */
    public $gtin8;

    /**
     * The height of the item.
     *
     * @var Distance|QuantitativeValue
     */
    public $height;

    /**
     * A pointer to another product (or multiple products) for which this product is an
     * accessory or spare part.
     *
     * @var Product
     */
    public $isAccessoryOrSparePartFor;

    /**
     * A pointer to another product (or multiple products) for which this product is a
     * consumable.
     *
     * @var Product
     */
    public $isConsumableFor;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Product|Service
     */
    public $isRelatedTo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Product|Service
     */
    public $isSimilarTo;

    /**
     * A predefined value from OfferItemCondition or a textual description of the
     * condition of the product or service, or the products or services included in the
     * offer.
     *
     * @var OfferItemCondition
     */
    public $itemCondition;

    /**
     * An associated logo.
     *
     * @var ImageObject|string
     */
    public $logo;

    /**
     * The manufacturer of the product.
     *
     * @var Organization
     */
    public $manufacturer;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     * @var Product|string
     */
    public $material;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual
     * representation of the model identifier. The URL of the ProductModel can be from
     * an external source. It is recommended to additionally provide strong product
     * identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     * @var ProductModel|string
     */
    public $model;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the
     * offer refers.
     *
     * @var string
     */
    public $mpn;

    /**
     * An offer to provide this item—for example, an offer to sell a product, rent
     * the DVD of a movie, perform a service, or give away tickets to an event.
     *
     * @var Offer
     */
    public $offers;

    /**
     * The product identifier, such as ISBN. For example: meta itemprop="productID"
     * content="isbn:123-456-789".
     *
     * @var string
     */
    public $productID;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @var string
     */
    public $productionDate;

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     * @var string
     */
    public $purchaseDate;

    /**
     * The release date of a product or product model. This can be used to distinguish
     * the exact variant of a product.
     *
     * @var string
     */
    public $releaseDate;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review
     */
    public $review;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product
     * or service, or the product to which the offer refers.
     *
     * @var string
     */
    public $sku;

    /**
     * The weight of the product or person.
     *
     * @var QuantitativeValue
     */
    public $weight;

    /**
     * The width of the item.
     *
     * @var Distance|QuantitativeValue
     */
    public $width;


}