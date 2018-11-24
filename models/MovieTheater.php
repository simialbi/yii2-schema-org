<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A movie theater.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MovieTheater
 */
class MovieTheater extends CivicStructure {
    /**
     * The number of screens in the movie theater.
     *
     * @var integer
     */
    public $screenCount;


}