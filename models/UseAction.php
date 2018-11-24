<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of applying an object to its intended purpose.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/UseAction
 */
class UseAction extends ConsumeAction {
    /**
     * A set of requirements that a must be fulfilled in order to perform an Action. If
     * more than one value is specied, fulfilling one set of requirements will allow
     * the Action to be performed.
     *
     * @var ActionAccessSpecification
     */
    public $actionAccessibilityRequirement;

    /**
     * An Offer which must be accepted before the user can perform the Action. For
     * example, the user may need to buy a movie before being able to watch it.
     *
     * @var Offer
     */
    public $expectsAcceptanceOf;

}