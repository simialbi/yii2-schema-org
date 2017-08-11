<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for TravelAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/TravelAction
 */
class TravelAction extends MoveAction {
	/**
	* @var Distance The distance travelled, e.g. exercising or travelling.
	*/
	public $distance;

}