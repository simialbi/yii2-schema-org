<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of providing an object under an agreement that it will be returned at a
 * later date. Reciprocal of BorrowAction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/LendAction
 */
class LendAction extends TransferAction {
    /**
     * A sub property of participant. The person that borrows the object being lent.
     *
     * @var Person
     */
    public $borrower;

}