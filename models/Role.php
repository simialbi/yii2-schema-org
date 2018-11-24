<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Represents additional information about a relationship or property. For example
 * a Role can be used to say that a 'member' role linking some SportsTeam to a
 * player occurred during a particular time period. Or that a Person's 'actor' role
 * in a Movie was for some particular characterName. Such properties can be
 * attached to a Role entity, which is then associated with the main entities using
 * ordinary properties like 'member' or 'actor'.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Role
 */
class Role extends Intangible {
    /**
     * The end date and time of the item (in ISO 8601 date format).
     *
     * @var string
     */
    public $endDate;

    /**
     * A role played, performed or filled by a person or organization. For example, the
     * team of creators for a comic book might fill the roles named 'inker',
     * 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the
     * position named 'Quarterback'. Supersedes namedPosition.
     *
     * @var string
     */
    public $roleName;

    /**
     * The start date and time of the item (in ISO 8601 date format).
     *
     * @var string
     */
    public $startDate;


}