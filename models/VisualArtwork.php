<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A work of art that is primarily visual in character.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VisualArtwork
 */
class VisualArtwork extends CreativeWork {
    /**
     * The number of copies when multiple copies of a piece of artwork are produced -
     * e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number
     * of copies (in this example "20").
     *
     * @var integer|string
     */
    public $artEdition;

    /**
     * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble,
     * Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil,
     * Mixed Media, etc.)
     *
     * @var string
     */
    public $artMedium;

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     *
     * @var string
     */
    public $artform;

    /**
     * The primary artist for a work
     *     in a medium other than pencils or digital line art--for example, if the
     *     primary artwork is done in watercolors or digital paints.
     *
     * @var Person
     */
    public $artist;

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     * Supersedes surface.
     *
     * @var string
     */
    public $artworkSurface;

    /**
     * The individual who adds color to inked drawings.
     *
     * @var Person
     */
    public $colorist;

    /**
     * The depth of the item.
     *
     * @var Distance|QuantitativeValue
     */
    public $depth;

    /**
     * The height of the item.
     *
     * @var Distance|QuantitativeValue
     */
    public $height;

    /**
     * The individual who traces over the pencil drawings in ink after pencils are
     * complete.
     *
     * @var Person
     */
    public $inker;

    /**
     * The individual who adds lettering, including speech balloons and sound effects,
     * to artwork.
     *
     * @var Person
     */
    public $letterer;

    /**
     * The individual who draws the primary narrative artwork.
     *
     * @var Person
     */
    public $penciler;

    /**
     * The width of the item.
     *
     * @var Distance|QuantitativeValue
     */
    public $width;


}