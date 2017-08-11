<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for BorrowAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BorrowAction
 */
class BorrowAction extends TransferAction {
	/**
	* @var Organization|Person A sub property of participant. The person that lends the object being borrowed.
	*/
	public $lender;

}