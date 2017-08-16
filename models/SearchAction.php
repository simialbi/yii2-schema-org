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
	 * @inheritdoc
	 */
	public function fields() {
		return array_merge(
			parent::fields(),
			[
				'query-input' => 'required'
			]
		);
	}
}