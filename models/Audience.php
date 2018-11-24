<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Intended audience for an item, i.e. the group for whom the item was created.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Audience
 */
class Audience extends Intangible {
    /**
     * The target group associated with a given audience (e.g. veterans, car owners,
     * musicians, etc.).
     *
     * @var string
     */
    public $audienceType;

    /**
     * The geographic area associated with the audience.
     *
     * @var AdministrativeArea
     */
    public $geographicArea;

}