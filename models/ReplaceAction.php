<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of editing a recipient by replacing an old object with a new object.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReplaceAction
 */
class ReplaceAction extends UpdateAction {
    /**
     * A sub property of object. The object that is being replaced.
     *
     * @var Thing
     */
    public $replacee;

    /**
     * A sub property of object. The object that replaces.
     *
     * @var Thing
     */
    public $replacer;

}