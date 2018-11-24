<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The business function specifies the type of activity or access (i.e., the bundle
 * of rights) offered by the organization or business person through the offer.
 * Typical are sell, rental or lease, maintenance or repair, manufacture / produce,
 * recycle / dispose, engineering / construction, or installation. Proprietary
 * specifications of access rights are also instances of this class.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BusinessFunction
 */
class BusinessFunction extends Enumeration {
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     *
     * @var Class|Enumeration|Property
     */
    public $supersededBy;

}