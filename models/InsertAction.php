<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of adding at a specific location in an ordered collection.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/InsertAction
 */
class InsertAction extends AddAction {
    /**
     * A sub property of location. The final location of the object or the agent after
     * the action.
     *
     * @var Place
     */
    public $toLocation;


}