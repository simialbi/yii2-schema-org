<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of expressing a preference from a fixed/finite/structured set of
 * choices/options.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/VoteAction
 */
class VoteAction extends ChooseAction {
    /**
     * A sub property of object. The candidate subject of this action.
     *
     * @var Person
     */
    public $candidate;

}