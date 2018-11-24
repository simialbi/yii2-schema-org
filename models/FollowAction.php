<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of forming a personal connection with someone/something (object)
 * unidirectionally/asymmetrically to get updates polled from.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/FollowAction
 */
class FollowAction extends InteractAction {
    /**
     * A sub property of object. The person or organization being followed.
     *
     * @var Organization|Person
     */
    public $followee;


}