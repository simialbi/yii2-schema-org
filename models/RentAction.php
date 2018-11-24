<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of giving money in return for temporary use, but not ownership, of an
 * object such as a vehicle or property. For example, an agent rents a property
 * from a landlord in exchange for a periodic payment.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/RentAction
 */
class RentAction extends TradeAction {
    /**
     * A sub property of participant. The owner of the real estate property.
     *
     * @var Organization|Person
     */
    public $landlord;

    /**
     * A sub property of participant. The real estate agent involved in the action.
     *
     * @var RealEstateAgent
     */
    public $realEstateAgent;

}