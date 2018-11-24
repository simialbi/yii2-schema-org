<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A part of a successively published publication such as a periodical or
 * publication volume, often numbered, usually containing a grouping of works such
 * as articles.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PublicationIssue
 */
class PublicationIssue extends CreativeWork {
    /**
     * Identifies the issue of publication; for example, "iii" or "2".
     *
     * @var integer|string
     */
    public $issueNumber;

    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     * @var integer|string
     */
    public $pageEnd;

    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     * @var integer|string
     */
    public $pageStart;

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for
     * example, "1-6, 9, 55" or "10-12, 46-49".
     *
     * @var string
     */
    public $pagination;


}