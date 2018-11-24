<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of allocating an action/event/task to some destination (someone or
 * something).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AssignAction
 */
class AssignAction extends AllocateAction {
    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var MedicalDevicePurpose|Thing
     */
    public $purpose;

}