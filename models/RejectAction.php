<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of rejecting to/adopting an object.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RejectAction
 */
class RejectAction extends AllocateAction {
    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var MedicalDevicePurpose|Thing
     */
    public $purpose;

}