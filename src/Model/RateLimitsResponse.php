<?php

namespace Ebay\Developer\Anlaytics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type defines a list of rate-limit data as it pertains to a method
 * within the specified version of an API.
 */
class RateLimitsResponse extends AbstractModel
{
    /**
     * The rate-limit data for the specified APIs. The rate-limit data is returned for
     * all the methods in the specified APIs and data pertains to the current time
     * window.
     *
     * @var \Ebay\Developer\Anlaytics\Model\RateLimit[]
     */
    public $rateLimits = null;
}
