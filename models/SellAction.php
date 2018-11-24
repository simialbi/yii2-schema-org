<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of taking money from a buyer in exchange for goods or services rendered.
 * An agent sells an object, product, or service to a buyer for a price. Reciprocal
 * of BuyAction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SellAction
 */
class SellAction extends TradeAction {
    /**
     * A sub property of participant. The participant/person/organization that bought
     * the object.
     *
     * @var Person
     */
    public $buyer;

}