<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for CommentAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CommentAction
 */
class CommentAction extends CommunicateAction {
	/**
	* @var Comment A sub property of result. The Comment created or sent as a result of this action.
	*/
	public $resultComment;

}