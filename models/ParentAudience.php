<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A set of characteristics describing parents, who can be interested in viewing
 * some content.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ParentAudience
 */
class ParentAudience extends PeopleAudience {
    /**
     * Maximal age of the child.
     *
     * @var integer
     */
    public $childMaxAge;

    /**
     * Minimal age of the child.
     *
     * @var integer
     */
    public $childMinAge;


}