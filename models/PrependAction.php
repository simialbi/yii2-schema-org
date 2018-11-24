<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of inserting at the beginning if an ordered collection.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PrependAction
 */
class PrependAction extends InsertAction {
    /**
     * A sub property of location. The final location of the object or the agent after
     * the action.
     *
     * @var Place
     */
    public $toLocation;

}