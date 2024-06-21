<?php
/*
 * GeniusReferralsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GeniusReferralsLib\Models;

use JsonSerializable;

/**
 * The redemption request's form
 */
class RedemptionRequestForm implements JsonSerializable
{
    /**
     * The redemption request's wrapper
     * @required
     * @maps redemption_request
     * @var RedemptionRequest $redemptionRequest public property
     */
    public $redemptionRequest;

    /**
     * Constructor to set initial or default values of member properties
     * @param RedemptionRequest $redemptionRequest Initialization value for $this->redemptionRequest
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->redemptionRequest = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['redemption_request'] = $this->redemptionRequest;

        return $json;
    }
}
