<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of participating in performance arts.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PerformAction
 */
class PerformAction extends PlayAction {
    /**
     * A sub property of location. The entertainment business where the action
     * occurred.
     *
     * @var EntertainmentBusiness
     */
    public $entertainmentBusiness;

}