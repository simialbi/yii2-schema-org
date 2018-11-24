<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A permit issued by an organization, e.g. a parking pass.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Permit
 */
class Permit extends Intangible {
    /**
     * The organization issuing the ticket or permit.
     *
     * @var Organization
     */
    public $issuedBy;

    /**
     * The service through with the permit was granted.
     *
     * @var Service
     */
    public $issuedThrough;

    /**
     * The target audience for this permit.
     *
     * @var Audience
     */
    public $permitAudience;

    /**
     * The time validity of the permit.
     *
     * @var Duration
     */
    public $validFor;

    /**
     * The date when the item becomes valid.
     *
     * @var string
     */
    public $validFrom;

    /**
     * The geographic area where the permit is valid.
     *
     * @var AdministrativeArea
     */
    public $validIn;

    /**
     * The date when the item is no longer valid.
     *
     * @var string
     */
    public $validUntil;

}