<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"), traveler
 * clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ProgramMembership
 */
class ProgramMembership extends Intangible {
    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     *
     * @var Organization
     */
    public $hostingOrganization;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members
     * of organizations; ProgramMembership is typically for individuals. Supersedes
     * members, musicGroupMember. Inverse property: memberOf.
     *
     * @var Organization|Person
     */
    public $member;

    /**
     * A unique identifier for the membership.
     *
     * @var string
     */
    public $membershipNumber;

    /**
     * The program providing the membership.
     *
     * @var string
     */
    public $programName;


}