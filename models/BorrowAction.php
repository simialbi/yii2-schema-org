<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of obtaining an object under an agreement to return it at a later date.
 * Reciprocal of LendAction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BorrowAction
 */
class BorrowAction extends TransferAction {
    /**
     * A sub property of participant. The person that lends the object being borrowed.
     *
     * @var Organization|Person
     */
    public $lender;


}