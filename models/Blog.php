<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A blog.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Blog
 */
class Blog extends CreativeWork {
    /**
     * A posting that is part of this blog. Supersedes blogPosts.
     *
     * @var BlogPosting
     */
    public $blogPost;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of, or
     * the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @var string
     */
    public $issn;

}