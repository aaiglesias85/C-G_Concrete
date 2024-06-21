<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/service_controller.proto

namespace Google\Cloud\ServiceControl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the Check method.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.CheckRequest</code>
 */
class CheckRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The service name as specified in its service configuration. For example,
     * `"pubsub.googleapis.com"`.
     * See
     * [google.api.Service](https://cloud.google.com/service-management/reference/rpc/google.api#google.api.Service)
     * for the definition of a service name.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     */
    private $service_name = '';
    /**
     * The operation to be checked.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.Operation operation = 2;</code>
     */
    private $operation = null;
    /**
     * Specifies which version of service configuration should be used to process
     * the request.
     * If unspecified or no matching version can be found, the
     * latest one will be used.
     *
     * Generated from protobuf field <code>string service_config_id = 4;</code>
     */
    private $service_config_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           The service name as specified in its service configuration. For example,
     *           `"pubsub.googleapis.com"`.
     *           See
     *           [google.api.Service](https://cloud.google.com/service-management/reference/rpc/google.api#google.api.Service)
     *           for the definition of a service name.
     *     @type \Google\Cloud\ServiceControl\V1\Operation $operation
     *           The operation to be checked.
     *     @type string $service_config_id
     *           Specifies which version of service configuration should be used to process
     *           the request.
     *           If unspecified or no matching version can be found, the
     *           latest one will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\ServiceController::initOnce();
        parent::__construct($data);
    }

    /**
     * The service name as specified in its service configuration. For example,
     * `"pubsub.googleapis.com"`.
     * See
     * [google.api.Service](https://cloud.google.com/service-management/reference/rpc/google.api#google.api.Service)
     * for the definition of a service name.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * The service name as specified in its service configuration. For example,
     * `"pubsub.googleapis.com"`.
     * See
     * [google.api.Service](https://cloud.google.com/service-management/reference/rpc/google.api#google.api.Service)
     * for the definition of a service name.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * The operation to be checked.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.Operation operation = 2;</code>
     * @return \Google\Cloud\ServiceControl\V1\Operation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * The operation to be checked.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.Operation operation = 2;</code>
     * @param \Google\Cloud\ServiceControl\V1\Operation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceControl\V1\Operation::class);
        $this->operation = $var;

        return $this;
    }

    /**
     * Specifies which version of service configuration should be used to process
     * the request.
     * If unspecified or no matching version can be found, the
     * latest one will be used.
     *
     * Generated from protobuf field <code>string service_config_id = 4;</code>
     * @return string
     */
    public function getServiceConfigId()
    {
        return $this->service_config_id;
    }

    /**
     * Specifies which version of service configuration should be used to process
     * the request.
     * If unspecified or no matching version can be found, the
     * latest one will be used.
     *
     * Generated from protobuf field <code>string service_config_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_config_id = $var;

        return $this;
    }

}

