<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Organization: Sports team.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SportsTeam
 */
class SportsTeam extends SportsOrganization {
    /**
     * A person that acts as performing member of a sports team; a player as opposed to
     * a coach.
     *
     * @var Person
     */
    public $athlete;

    /**
     * A person that acts in a coaching role for a sports team.
     *
     * @var Person
     */
    public $coach;

}