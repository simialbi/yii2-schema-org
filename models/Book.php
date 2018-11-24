<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A book.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Book
 */
class Book extends CreativeWork {
    /**
     * Indicates whether the book is an abridged edition.
     *
     * @var boolean
     */
    public $abridged;

    /**
     * The edition of the book.
     *
     * @var string
     */
    public $bookEdition;

    /**
     * The format of the book.
     *
     * @var BookFormatType
     */
    public $bookFormat;

    /**
     * The illustrator of the book.
     *
     * @var Person
     */
    public $illustrator;

    /**
     * The ISBN of the book.
     *
     * @var string
     */
    public $isbn;

    /**
     * The number of pages in the book.
     *
     * @var integer
     */
    public $numberOfPages;

}