<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A part of a successively published publication such as a periodical or
 * multi-volume work, often numbered. It may represent a time span, such as a year.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PublicationVolume
 */
class PublicationVolume extends CreativeWork {
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

    /**
     * Identifies the volume of publication or multi-part work; for example, "iii" or
     * "2".
     *
     * @var integer|string
     */
    public $volumeNumber;


}