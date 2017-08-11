<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Game
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Game
 */
class Game extends CreativeWork {
	/**
	* @var Thing A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
	*/
	public $characterAttribute;

	/**
	* @var Thing An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
	*/
	public $gameItem;

	/**
	* @var Place|PostalAddress|string Real or fictional location of the game (or part of game).
	*/
	public $gameLocation;

	/**
	* @var QuantitativeValue Indicate how many people can play this game (minimum, maximum, or range).
	*/
	public $numberOfPlayers;

	/**
	* @var Thing The task that a player-controlled character, or group of characters may complete in order to gain a reward.
	*/
	public $quest;

}