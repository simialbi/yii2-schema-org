<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for MusicComposition
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicComposition
 */
class MusicComposition extends CreativeWork {
	/**
	* @var Organization|Person The person or organization who wrote a composition, or who is the composer of a work performed at some event.
	*/
	public $composer;

	/**
	* @var Event The date and place the work was first performed.
	*/
	public $firstPerformance;

	/**
	* @var MusicComposition Smaller compositions included in this work (e.g. a movement in a symphony).
	*/
	public $includedComposition;

	/**
	* @var string The International Standard Musical Work Code for the composition.
	*/
	public $iswcCode;

	/**
	* @var Person The person who wrote the words.
	*/
	public $lyricist;

	/**
	* @var CreativeWork The words in the song.
	*/
	public $lyrics;

	/**
	* @var MusicComposition An arrangement derived from the composition.
	*/
	public $musicArrangement;

	/**
	* @var string The type of composition (e.g. overture, sonata, symphony, etc.).
	*/
	public $musicCompositionForm;

	/**
	* @var string The key, mode, or scale this composition uses.
	*/
	public $musicalKey;

	/**
	* @var MusicRecording An audio recording of the work. Inverse property: recordingOf.
	*/
	public $recordedAs;

}