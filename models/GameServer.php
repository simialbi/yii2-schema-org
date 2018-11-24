<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Server that provides game interaction in a multiplayer game.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/GameServer
 */
class GameServer extends Intangible {
    /**
     * Video game which is played on this server. Inverse property: gameServer.
     *
     * @var VideoGame
     */
    public $game;

    /**
     * Number of players on the server.
     *
     * @var integer
     */
    public $playersOnline;

    /**
     * Status of a game server.
     *
     * @var GameServerStatus
     */
    public $serverStatus;


}