<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A datasheet or vendor specification of a product (in the sense of a prototypical
 * description).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ProductModel
 */
class ProductModel extends Product {
    /**
     * A pointer to a base product from which this product is a variant. It is safe to
     * infer that the variant inherits all product features from the base model, unless
     * defined locally. This is not transitive.
     *
     * @var ProductModel
     */
    public $isVariantOf;

    /**
     * A pointer from a previous, often discontinued variant of the product to its
     * newer variant.
     *
     * @var ProductModel
     */
    public $predecessorOf;

    /**
     * A pointer from a newer variant of a product  to its previous, often discontinued
     * predecessor.
     *
     * @var ProductModel
     */
    public $successorOf;

}