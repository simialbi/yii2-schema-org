<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for AlignmentObject
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AlignmentObject
 */
class AlignmentObject extends Intangible {
	/**
	* @var string A category of alignment between the learning resource and the framework node. Recommended values include: 'assesses', 'teaches', 'requires', 'textComplexity', 'readingLevel', 'educationalSubject', and 'educationalLevel'.
	*/
	public $alignmentType;

	/**
	* @var string The framework to which the resource being described is aligned.
	*/
	public $educationalFramework;

	/**
	* @var string The description of a node in an established educational framework.
	*/
	public $targetDescription;

	/**
	* @var string The name of a node in an established educational framework.
	*/
	public $targetName;

	/**
	* @var string The URL of a node in an established educational framework.
	*/
	public $targetUrl;

}