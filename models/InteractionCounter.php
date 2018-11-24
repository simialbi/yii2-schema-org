<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A summary of how users have interacted with this CreativeWork. In most cases,
 * authors will use a subtype to specify the specific type of interaction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InteractionCounter
 */
class InteractionCounter extends StructuredValue {
    /**
     * The WebSite or SoftwareApplication where the interactions took place.
     *
     * @var SoftwareApplication|WebSite
     */
    public $interactionService;

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use
     * LikeAction. For down votes use DislikeAction. Otherwise, use the most specific
     * Action.
     *
     * @var Action
     */
    public $interactionType;

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication.
     *
     * @var integer
     */
    public $userInteractionCount;


}