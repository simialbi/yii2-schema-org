<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of producing a balanced opinion about the object for an audience. An
 * agent reviews an object with participants resulting in a review.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReviewAction
 */
class ReviewAction extends AssessAction {
    /**
     * A sub property of result. The review that resulted in the performing of the
     * action.
     *
     * @var Review
     */
    public $resultReview;

}