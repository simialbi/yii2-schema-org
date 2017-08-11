<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for InteractionCounter
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InteractionCounter
 */
class InteractionCounter extends StructuredValue {
	/**
	* @var SoftwareApplication|WebSite The WebSite or SoftwareApplication where the interactions took place.
	*/
	public $interactionService;

	/**
	* @var Action The Action representing the type of interaction. For up votes, +1s, etc. use LikeAction. For down votes use DislikeAction. Otherwise, use the most specific Action.
	*/
	public $interactionType;

	/**
	* @var integer The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
	*/
	public $userInteractionCount;

}