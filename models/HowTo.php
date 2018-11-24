<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Instructions that explain how to achieve a result by performing a sequence of
 * steps.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/HowTo
 */
class HowTo extends CreativeWork {
    /**
     * The estimated cost of the supply or supplies consumed when performing
     * instructions.
     *
     * @var MonetaryAmount|string
     */
    public $estimatedCost;

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
     * A single step item (as HowToStep, text, document, video, etc.) or a
     * HowToSection. Supersedes steps.
     *
     * @var CreativeWork|HowToSection|HowToStep|string
     */
    public $step;

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

    /**
     * The quantity that results by performing instructions. For example, a paper
     * airplane, 10 personalized candles.
     *
     * @var QuantitativeValue|string
     */
    public $yield;


}