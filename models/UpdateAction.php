<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of managing by changing/editing the state of the object.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/UpdateAction
 */
class UpdateAction extends Action {
    /**
     * A sub property of object. The collection target of the action. Supersedes
     * collection.
     *
     * @var Thing
     */
    public $targetCollection;


}