<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of organizing tasks/objects/events by associating resources to it.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AllocateAction
 */
class AllocateAction extends OrganizeAction {
    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var MedicalDevicePurpose|Thing
     */
    public $purpose;

}