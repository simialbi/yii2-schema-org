<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for SearchAction
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SearchAction
 */
class SearchAction extends Action {
	/**
	* @var string A sub property of instrument. The query used on this action.
	*/
	public $query;

	/**
	* @var string Query input param
	*/
	public $query_input = 'required';
}