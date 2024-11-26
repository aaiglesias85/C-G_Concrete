<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HealthStatusForNetworkEndpoint</code>
 */
class HealthStatusForNetworkEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * URL of the backend service associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.BackendServiceReference backend_service = 306946058;</code>
     */
    private $backend_service = null;
    /**
     * URL of the forwarding rule associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ForwardingRuleReference forwarding_rule = 269964030;</code>
     */
    private $forwarding_rule = null;
    /**
     * URL of the health check associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HealthCheckReference health_check = 308876645;</code>
     */
    private $health_check = null;
    /**
     * URL of the health check service associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HealthCheckServiceReference health_check_service = 408374747;</code>
     */
    private $health_check_service = null;
    /**
     * Health state of the network endpoint determined based on the health checks configured.
     * Check the HealthState enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string health_state = 324007150;</code>
     */
    private $health_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\BackendServiceReference $backend_service
     *           URL of the backend service associated with the health state of the network endpoint.
     *     @type \Google\Cloud\Compute\V1\ForwardingRuleReference $forwarding_rule
     *           URL of the forwarding rule associated with the health state of the network endpoint.
     *     @type \Google\Cloud\Compute\V1\HealthCheckReference $health_check
     *           URL of the health check associated with the health state of the network endpoint.
     *     @type \Google\Cloud\Compute\V1\HealthCheckServiceReference $health_check_service
     *           URL of the health check service associated with the health state of the network endpoint.
     *     @type string $health_state
     *           Health state of the network endpoint determined based on the health checks configured.
     *           Check the HealthState enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * URL of the backend service associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.BackendServiceReference backend_service = 306946058;</code>
     * @return \Google\Cloud\Compute\V1\BackendServiceReference|null
     */
    public function getBackendService()
    {
        return $this->backend_service;
    }

    public function hasBackendService()
    {
        return isset($this->backend_service);
    }

    public function clearBackendService()
    {
        unset($this->backend_service);
    }

    /**
     * URL of the backend service associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.BackendServiceReference backend_service = 306946058;</code>
     * @param \Google\Cloud\Compute\V1\BackendServiceReference $var
     * @return $this
     */
    public function setBackendService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\BackendServiceReference::class);
        $this->backend_service = $var;

        return $this;
    }

    /**
     * URL of the forwarding rule associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ForwardingRuleReference forwarding_rule = 269964030;</code>
     * @return \Google\Cloud\Compute\V1\ForwardingRuleReference|null
     */
    public function getForwardingRule()
    {
        return $this->forwarding_rule;
    }

    public function hasForwardingRule()
    {
        return isset($this->forwarding_rule);
    }

    public function clearForwardingRule()
    {
        unset($this->forwarding_rule);
    }

    /**
     * URL of the forwarding rule associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ForwardingRuleReference forwarding_rule = 269964030;</code>
     * @param \Google\Cloud\Compute\V1\ForwardingRuleReference $var
     * @return $this
     */
    public function setForwardingRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ForwardingRuleReference::class);
        $this->forwarding_rule = $var;

        return $this;
    }

    /**
     * URL of the health check associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HealthCheckReference health_check = 308876645;</code>
     * @return \Google\Cloud\Compute\V1\HealthCheckReference|null
     */
    public function getHealthCheck()
    {
        return $this->health_check;
    }

    public function hasHealthCheck()
    {
        return isset($this->health_check);
    }

    public function clearHealthCheck()
    {
        unset($this->health_check);
    }

    /**
     * URL of the health check associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HealthCheckReference health_check = 308876645;</code>
     * @param \Google\Cloud\Compute\V1\HealthCheckReference $var
     * @return $this
     */
    public function setHealthCheck($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HealthCheckReference::class);
        $this->health_check = $var;

        return $this;
    }

    /**
     * URL of the health check service associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HealthCheckServiceReference health_check_service = 408374747;</code>
     * @return \Google\Cloud\Compute\V1\HealthCheckServiceReference|null
     */
    public function getHealthCheckService()
    {
        return $this->health_check_service;
    }

    public function hasHealthCheckService()
    {
        return isset($this->health_check_service);
    }

    public function clearHealthCheckService()
    {
        unset($this->health_check_service);
    }

    /**
     * URL of the health check service associated with the health state of the network endpoint.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HealthCheckServiceReference health_check_service = 408374747;</code>
     * @param \Google\Cloud\Compute\V1\HealthCheckServiceReference $var
     * @return $this
     */
    public function setHealthCheckService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HealthCheckServiceReference::class);
        $this->health_check_service = $var;

        return $this;
    }

    /**
     * Health state of the network endpoint determined based on the health checks configured.
     * Check the HealthState enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string health_state = 324007150;</code>
     * @return string
     */
    public function getHealthState()
    {
        return isset($this->health_state) ? $this->health_state : '';
    }

    public function hasHealthState()
    {
        return isset($this->health_state);
    }

    public function clearHealthState()
    {
        unset($this->health_state);
    }

    /**
     * Health state of the network endpoint determined based on the health checks configured.
     * Check the HealthState enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string health_state = 324007150;</code>
     * @param string $var
     * @return $this
     */
    public function setHealthState($var)
    {
        GPBUtil::checkString($var, True);
        $this->health_state = $var;

        return $this;
    }

}

