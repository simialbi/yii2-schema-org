<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A fact-checking review of claims made (or reported) in some creative work
 * (referenced via itemReviewed).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ClaimReview
 */
class ClaimReview extends Review {
    /**
     * A short summary of the specific claims reviewed in a ClaimReview.
     *
     * @var string
     */
    public $claimReviewed;


}