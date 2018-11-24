<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An entity holding detailed information about the available bed types, e.g. the
 * quantity of twin beds for a hotel room. For the single case of just one bed of a
 * certain type, you can use bed directly with a text. See also BedType (under
 * development).
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/BedDetails
 */
class BedDetails extends Intangible {
    /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or
     * Apartment.
     *
     * @var integer
     */
    public $numberOfBeds;

    /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in
     * the quantity indicated by quantity.
     *
     * @var BedType|string
     */
    public $typeOfBed;


}