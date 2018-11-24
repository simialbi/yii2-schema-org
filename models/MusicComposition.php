<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A musical composition.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/MusicComposition
 */
class MusicComposition extends CreativeWork {
    /**
     * The person or organization who wrote a composition, or who is the composer of a
     * work performed at some event.
     *
     * @var Organization|Person
     */
    public $composer;

    /**
     * The date and place the work was first performed.
     *
     * @var Event
     */
    public $firstPerformance;

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     *
     * @var MusicComposition
     */
    public $includedComposition;

    /**
     * The International Standard Musical Work Code for the composition.
     *
     * @var string
     */
    public $iswcCode;

    /**
     * The person who wrote the words.
     *
     * @var Person
     */
    public $lyricist;

    /**
     * The words in the song.
     *
     * @var CreativeWork
     */
    public $lyrics;

    /**
     * An arrangement derived from the composition.
     *
     * @var MusicComposition
     */
    public $musicArrangement;

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     *
     * @var string
     */
    public $musicCompositionForm;

    /**
     * The key, mode, or scale this composition uses.
     *
     * @var string
     */
    public $musicalKey;

    /**
     * An audio recording of the work. Inverse property: recordingOf.
     *
     * @var MusicRecording
     */
    public $recordedAs;

}