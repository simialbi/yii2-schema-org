<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for LendAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LendAction
 */
class LendAction extends TransferAction {
	/**
	* @var Person A sub property of participant. The person that borrows the object being lent.
	*/
	public $borrower;

}