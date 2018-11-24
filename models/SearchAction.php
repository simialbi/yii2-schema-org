<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of searching for an object.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SearchAction
 */
class SearchAction extends Action {
    /**
     * A sub property of instrument. The query used on this action.
     *
     * @var string
     */
    public $query;


    /**
     * @var string Query input param
     */
    public $query_input = 'required';
}