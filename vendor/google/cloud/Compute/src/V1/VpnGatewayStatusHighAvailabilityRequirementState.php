<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the high availability requirement state for the VPN connection between this Cloud VPN gateway and a peer gateway.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.VpnGatewayStatusHighAvailabilityRequirementState</code>
 */
class VpnGatewayStatusHighAvailabilityRequirementState extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates the high availability requirement state for the VPN connection. Valid values are CONNECTION_REDUNDANCY_MET, CONNECTION_REDUNDANCY_NOT_MET.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     */
    private $state = null;
    /**
     * Indicates the reason why the VPN connection does not meet the high availability redundancy criteria/requirement. Valid values is INCOMPLETE_TUNNELS_COVERAGE.
     * Check the UnsatisfiedReason enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string unsatisfied_reason = 55016330;</code>
     */
    private $unsatisfied_reason = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $state
     *           Indicates the high availability requirement state for the VPN connection. Valid values are CONNECTION_REDUNDANCY_MET, CONNECTION_REDUNDANCY_NOT_MET.
     *           Check the State enum for the list of possible values.
     *     @type string $unsatisfied_reason
     *           Indicates the reason why the VPN connection does not meet the high availability redundancy criteria/requirement. Valid values is INCOMPLETE_TUNNELS_COVERAGE.
     *           Check the UnsatisfiedReason enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates the high availability requirement state for the VPN connection. Valid values are CONNECTION_REDUNDANCY_MET, CONNECTION_REDUNDANCY_NOT_MET.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @return string
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : '';
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * Indicates the high availability requirement state for the VPN connection. Valid values are CONNECTION_REDUNDANCY_MET, CONNECTION_REDUNDANCY_NOT_MET.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Indicates the reason why the VPN connection does not meet the high availability redundancy criteria/requirement. Valid values is INCOMPLETE_TUNNELS_COVERAGE.
     * Check the UnsatisfiedReason enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string unsatisfied_reason = 55016330;</code>
     * @return string
     */
    public function getUnsatisfiedReason()
    {
        return isset($this->unsatisfied_reason) ? $this->unsatisfied_reason : '';
    }

    public function hasUnsatisfiedReason()
    {
        return isset($this->unsatisfied_reason);
    }

    public function clearUnsatisfiedReason()
    {
        unset($this->unsatisfied_reason);
    }

    /**
     * Indicates the reason why the VPN connection does not meet the high availability redundancy criteria/requirement. Valid values is INCOMPLETE_TUNNELS_COVERAGE.
     * Check the UnsatisfiedReason enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string unsatisfied_reason = 55016330;</code>
     * @param string $var
     * @return $this
     */
    public function setUnsatisfiedReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->unsatisfied_reason = $var;

        return $this;
    }

}

