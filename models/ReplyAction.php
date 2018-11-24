<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of responding to a question/message asked/sent by the object. Related to
 * AskAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ReplyAction
 */
class ReplyAction extends CommunicateAction {
    /**
     * A sub property of result. The Comment created or sent as a result of this
     * action.
     *
     * @var Comment
     */
    public $resultComment;

}