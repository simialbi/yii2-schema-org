<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for GameServer
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GameServer
 */
class GameServer extends Intangible {
	/**
	* @var VideoGame Video game which is played on this server. Inverse property: gameServer.
	*/
	public $game;

	/**
	* @var integer Number of players on the server.
	*/
	public $playersOnline;

	/**
	* @var GameServerStatus Status of a game server.
	*/
	public $serverStatus;

}