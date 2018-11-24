<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of editing a recipient by removing one of its objects.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/DeleteAction
 */
class DeleteAction extends UpdateAction {
    /**
     * A sub property of object. The collection target of the action. Supersedes
     * collection.
     *
     * @var Thing
     */
    public $targetCollection;


}