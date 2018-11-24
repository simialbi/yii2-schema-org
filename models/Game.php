<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The Game type represents things which are games. These are typically
 * rule-governed recreational activities, e.g. role-playing games in which players
 * assume the role of characters in a fictional setting.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Game
 */
class Game extends CreativeWork {
    /**
     * A piece of data that represents a particular aspect of a fictional character
     * (skill, power, character points, advantage, disadvantage).
     *
     * @var Thing
     */
    public $characterAttribute;

    /**
     * An item is an object within the game world that can be collected by a player or,
     * occasionally, a non-player character.
     *
     * @var Thing
     */
    public $gameItem;

    /**
     * Real or fictional location of the game (or part of game).
     *
     * @var Place|PostalAddress|string
     */
    public $gameLocation;

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     * @var QuantitativeValue
     */
    public $numberOfPlayers;

    /**
     * The task that a player-controlled character, or group of characters may complete
     * in order to gain a reward.
     *
     * @var Thing
     */
    public $quest;


}