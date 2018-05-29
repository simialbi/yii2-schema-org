<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for VisualArtwork
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VisualArtwork
 */
class VisualArtwork extends CreativeWork {
	/**
	* @var integer|string The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
	*/
	public $artEdition;

	/**
	* @var string The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
	*/
	public $artMedium;

	/**
	* @var string e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
	*/
	public $artform;

	/**
	* @var Person The primary artist for a work
    in a medium other than pencils or digital line art--for example, if the
    primary artwork is done in watercolors or digital paints.
	*/
	public $artist;

	/**
	* @var string The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc. Supersedes surface.
	*/
	public $artworkSurface;

	/**
	* @var Person The individual who adds color to inked drawings.
	*/
	public $colorist;

	/**
	* @var Distance|QuantitativeValue The depth of the item.
	*/
	public $depth;

	/**
	* @var Distance|QuantitativeValue The height of the item.
	*/
	public $height;

	/**
	* @var Person The individual who traces over the pencil drawings in ink after pencils are complete.
	*/
	public $inker;

	/**
	* @var Person The individual who adds lettering, including speech balloons and sound effects, to artwork.
	*/
	public $letterer;

	/**
	* @var Person The individual who draws the primary narrative artwork.
	*/
	public $penciler;

	/**
	* @var Distance|QuantitativeValue The width of the item.
	*/
	public $width;

}