<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for BuyAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BuyAction
 */
class BuyAction extends TradeAction {
	/**
	* @var Organization|Person An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider. Supersedes merchant, vendor.
	*/
	public $seller;

}