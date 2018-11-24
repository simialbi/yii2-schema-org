<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An intangible item that describes an alignment between a learning resource and a
 * node in an educational framework.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AlignmentObject
 */
class AlignmentObject extends Intangible {
    /**
     * A category of alignment between the learning resource and the framework node.
     * Recommended values include: 'assesses', 'teaches', 'requires', 'textComplexity',
     * 'readingLevel', 'educationalSubject', and 'educationalLevel'.
     *
     * @var string
     */
    public $alignmentType;

    /**
     * The framework to which the resource being described is aligned.
     *
     * @var string
     */
    public $educationalFramework;

    /**
     * The description of a node in an established educational framework.
     *
     * @var string
     */
    public $targetDescription;

    /**
     * The name of a node in an established educational framework.
     *
     * @var string
     */
    public $targetName;

    /**
     * The URL of a node in an established educational framework.
     *
     * @var string
     */
    public $targetUrl;

}