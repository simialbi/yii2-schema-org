<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A technical article - Example: How-to (task) topics, step-by-step, procedural
 * troubleshooting, specifications, etc.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TechArticle
 */
class TechArticle extends Article {
    /**
     * Prerequisites needed to fulfill steps in article.
     *
     * @var string
     */
    public $dependencies;

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     *
     * @var string
     */
    public $proficiencyLevel;

}