<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/baremetalsolution.proto

namespace Google\Cloud\BaremetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message containing the list of networks.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.ListNetworksResponse</code>
 */
class ListNetworksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of networks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.Network networks = 1;</code>
     */
    private $networks;
    /**
     * A token identifying a page of results from the server.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BaremetalSolution\V2\Network[]|\Google\Protobuf\Internal\RepeatedField $networks
     *           The list of networks.
     *     @type string $next_page_token
     *           A token identifying a page of results from the server.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Baremetalsolution::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of networks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.Network networks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * The list of networks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.Network networks = 1;</code>
     * @param \Google\Cloud\BaremetalSolution\V2\Network[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BaremetalSolution\V2\Network::class);
        $this->networks = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results from the server.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results from the server.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

