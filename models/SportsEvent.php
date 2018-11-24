<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Event type: Sports event.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SportsEvent
 */
class SportsEvent extends Event {
    /**
     * The away team in a sports event.
     *
     * @var Person|SportsTeam
     */
    public $awayTeam;

    /**
     * A competitor in a sports event.
     *
     * @var Person|SportsTeam
     */
    public $competitor;

    /**
     * The home team in a sports event.
     *
     * @var Person|SportsTeam
     */
    public $homeTeam;


}