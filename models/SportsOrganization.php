<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Represents the collection of all sports organizations, including sports teams,
 * governing bodies, and sports associations.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SportsOrganization
 */
class SportsOrganization extends Organization {
    /**
     * A type of sport (e.g. Baseball).
     *
     * @var string
     */
    public $sport;


}