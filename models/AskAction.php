<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of posing a question / favor to someone.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/AskAction
 */
class AskAction extends CommunicateAction {
    /**
     * A sub property of object. A question.
     *
     * @var Question
     */
    public $question;

}