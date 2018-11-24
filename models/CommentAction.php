<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of generating a comment about a subject.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CommentAction
 */
class CommentAction extends CommunicateAction {
    /**
     * A sub property of result. The Comment created or sent as a result of this
     * action.
     *
     * @var Comment
     */
    public $resultComment;

}