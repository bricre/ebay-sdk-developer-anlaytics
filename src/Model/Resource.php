<?php

namespace Ebay\Developer\Anlaytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type defines the resource (API method) and the current rate-limit
 * data for that resource.
 */
class Resource extends AbstractModel
{
    /**
     * The name of the resource (an API or an API method) to which the rate-limit data
     * applies.
     *
     * @var string
     */
    public $name = null;

    /**
     * A list of rate-limit data, where each list element represents the rate-limit
     * data for a specific resource.
     *
     * @var \Ebay\Developer\Anlaytics\Model\Rate[]
     */
    public $rates = null;
}
