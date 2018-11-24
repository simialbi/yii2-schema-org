<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * RsvpResponseType is an enumeration type whose instances represent responding to
 * an RSVP request.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RsvpResponseType
 */
class RsvpResponseType extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;


}