<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A publication in any medium issued in successive parts bearing numerical or
 * chronological designations and intended, such as a magazine, scholarly journal,
 * or newspaper to continue indefinitely.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Periodical
 */
class Periodical extends CreativeWorkSeries {
    /**
     * The end date and time of the item (in ISO 8601 date format).
     *
     * @var string
     */
    public $endDate;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of, or
     * the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @var string
     */
    public $issn;

    /**
     * The start date and time of the item (in ISO 8601 date format).
     *
     * @var string
     */
    public $startDate;

}