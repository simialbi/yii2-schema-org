<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of editing by adding an object to a collection.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AddAction
 */
class AddAction extends UpdateAction {
    /**
     * A sub property of object. The collection target of the action. Supersedes
     * collection.
     *
     * @var Thing
     */
    public $targetCollection;

}