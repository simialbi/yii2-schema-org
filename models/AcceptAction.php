<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of committing to/adopting an object.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AcceptAction
 */
class AcceptAction extends AllocateAction {
    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var MedicalDevicePurpose|Thing
     */
    public $purpose;


}