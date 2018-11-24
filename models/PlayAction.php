<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of playing/exercising/training/performing for enjoyment, leisure,
 * recreation, Competition or exercise.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PlayAction
 */
class PlayAction extends Action {
    /**
     * An intended audience, i.e. a group for whom something was created. Supersedes
     * serviceAudience.
     *
     * @var Audience
     */
    public $audience;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     * Supersedes events.
     *
     * @var Event
     */
    public $event;


}