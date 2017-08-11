<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ProductModel
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ProductModel
 */
class ProductModel extends Product {
	/**
	* @var ProductModel A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
	*/
	public $isVariantOf;

	/**
	* @var ProductModel A pointer from a previous, often discontinued variant of the product to its newer variant.
	*/
	public $predecessorOf;

	/**
	* @var ProductModel A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
	*/
	public $successorOf;

}