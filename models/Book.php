<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Book
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Book
 */
class Book extends CreativeWork {
	/**
	* @var boolean Indicates whether the book is an abridged edition.
	*/
	public $abridged;

	/**
	* @var string The edition of the book.
	*/
	public $bookEdition;

	/**
	* @var BookFormatType The format of the book.
	*/
	public $bookFormat;

	/**
	* @var Person The illustrator of the book.
	*/
	public $illustrator;

	/**
	* @var string The ISBN of the book.
	*/
	public $isbn;

	/**
	* @var integer The number of pages in the book.
	*/
	public $numberOfPages;

}