<?php

namespace tests\schemas;

use simialbi\yii2\schemaorg\models\Model;

/**
 * The average rating based on multiple ratings or reviews.
 *
 * @see http://schema.org/AggregateRating
 */
class AggregateRating extends Model
{
    use traits\AggregateRatingTrait;
}
