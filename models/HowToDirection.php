<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A direction indicating a single action to do in the instructions for how to
 * achieve a result.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowToDirection
 */
class HowToDirection extends CreativeWork {
    /**
     * A media object representing the circumstances after performing this direction.
     *
     * @var MediaObject|string
     */
    public $afterMedia;

    /**
     * A media object representing the circumstances before performing this direction.
     *
     * @var MediaObject|string
     */
    public $beforeMedia;

    /**
     * A media object representing the circumstances while performing this direction.
     *
     * @var MediaObject|string
     */
    public $duringMedia;

    /**
     * The length of time it takes to perform instructions or a direction (not
     * including time to prepare the supplies), in ISO 8601 duration format.
     *
     * @var Duration
     */
    public $performTime;

    /**
     * The length of time it takes to prepare the items to be used in instructions or a
     * direction, in ISO 8601 duration format.
     *
     * @var Duration
     */
    public $prepTime;

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or
     * a direction.
     *
     * @var HowToSupply|string
     */
    public $supply;

    /**
     * A sub property of instrument. An object used (but not consumed) when performing
     * instructions or a direction.
     *
     * @var HowToTool|string
     */
    public $tool;

    /**
     * The total time required to perform instructions or a direction (including time
     * to prepare the supplies), in ISO 8601 duration format.
     *
     * @var Duration
     */
    public $totalTime;

}