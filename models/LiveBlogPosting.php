<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A blog post intended to provide a rolling textual coverage of an ongoing event
 * through continuous updates.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LiveBlogPosting
 */
class LiveBlogPosting extends BlogPosting {
    /**
     * The time when the live blog will stop covering the Event. Note that coverage may
     * continue after the Event concludes.
     *
     * @var string
     */
    public $coverageEndTime;

    /**
     * The time when the live blog will begin covering the Event. Note that coverage
     * may begin before the Event's start time. The LiveBlogPosting may also be created
     * before coverage begins.
     *
     * @var string
     */
    public $coverageStartTime;

    /**
     * An update to the LiveBlog.
     *
     * @var BlogPosting
     */
    public $liveBlogUpdate;


}