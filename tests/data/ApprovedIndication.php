<?php

namespace tests\schemas;

use simialbi\yii2\schemaorg\models\Model;

/**
 * An indication for a medical therapy that has been formally specified or
 * approved by a regulatory body that regulates use of the therapy; for
 * example, the US FDA approves indications for most drugs in the US.
 *
 * @see http://schema.org/ApprovedIndication
 */
class ApprovedIndication extends Model
{
    use traits\ApprovedIndicationTrait;
}
