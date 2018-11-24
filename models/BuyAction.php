<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of giving money to a seller in exchange for goods or services rendered.
 * An agent buys an object, product, or service from a seller for a price.
 * Reciprocal of SellAction.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BuyAction
 */
class BuyAction extends TradeAction {
    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A
     * seller may also be a provider. Supersedes merchant, vendor.
     *
     * @var Organization|Person
     */
    public $seller;


}