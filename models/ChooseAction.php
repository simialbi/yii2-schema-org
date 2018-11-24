<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of expressing a preference from a set of options or a large or unbounded
 * set of choices/options.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ChooseAction
 */
class ChooseAction extends AssessAction {
    /**
     * A sub property of object. The options subject to this action. Supersedes option.
     *
     * @var string|Thing
     */
    public $actionOption;

}