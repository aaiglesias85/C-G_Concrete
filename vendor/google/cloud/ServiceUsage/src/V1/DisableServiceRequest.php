<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1/serviceusage.proto

namespace Google\Cloud\ServiceUsage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `DisableService` method.
 *
 * Generated from protobuf message <code>google.api.serviceusage.v1.DisableServiceRequest</code>
 */
class DisableServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the consumer and service to disable the service on.
     * The enable and disable methods currently only support projects.
     * An example name would be:
     * `projects/123/services/serviceusage.googleapis.com` where `123` is the
     * project number.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Indicates if services that are enabled and which depend on this service
     * should also be disabled. If not set, an error will be generated if any
     * enabled services depend on the service to be disabled. When set, the
     * service, and any enabled services that depend on it, will be disabled
     * together.
     *
     * Generated from protobuf field <code>bool disable_dependent_services = 2;</code>
     */
    private $disable_dependent_services = false;
    /**
     * Defines the behavior for checking service usage when disabling a service.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.DisableServiceRequest.CheckIfServiceHasUsage check_if_service_has_usage = 3;</code>
     */
    private $check_if_service_has_usage = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the consumer and service to disable the service on.
     *           The enable and disable methods currently only support projects.
     *           An example name would be:
     *           `projects/123/services/serviceusage.googleapis.com` where `123` is the
     *           project number.
     *     @type bool $disable_dependent_services
     *           Indicates if services that are enabled and which depend on this service
     *           should also be disabled. If not set, an error will be generated if any
     *           enabled services depend on the service to be disabled. When set, the
     *           service, and any enabled services that depend on it, will be disabled
     *           together.
     *     @type int $check_if_service_has_usage
     *           Defines the behavior for checking service usage when disabling a service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Serviceusage\V1\Serviceusage::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the consumer and service to disable the service on.
     * The enable and disable methods currently only support projects.
     * An example name would be:
     * `projects/123/services/serviceusage.googleapis.com` where `123` is the
     * project number.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the consumer and service to disable the service on.
     * The enable and disable methods currently only support projects.
     * An example name would be:
     * `projects/123/services/serviceusage.googleapis.com` where `123` is the
     * project number.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Indicates if services that are enabled and which depend on this service
     * should also be disabled. If not set, an error will be generated if any
     * enabled services depend on the service to be disabled. When set, the
     * service, and any enabled services that depend on it, will be disabled
     * together.
     *
     * Generated from protobuf field <code>bool disable_dependent_services = 2;</code>
     * @return bool
     */
    public function getDisableDependentServices()
    {
        return $this->disable_dependent_services;
    }

    /**
     * Indicates if services that are enabled and which depend on this service
     * should also be disabled. If not set, an error will be generated if any
     * enabled services depend on the service to be disabled. When set, the
     * service, and any enabled services that depend on it, will be disabled
     * together.
     *
     * Generated from protobuf field <code>bool disable_dependent_services = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableDependentServices($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_dependent_services = $var;

        return $this;
    }

    /**
     * Defines the behavior for checking service usage when disabling a service.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.DisableServiceRequest.CheckIfServiceHasUsage check_if_service_has_usage = 3;</code>
     * @return int
     */
    public function getCheckIfServiceHasUsage()
    {
        return $this->check_if_service_has_usage;
    }

    /**
     * Defines the behavior for checking service usage when disabling a service.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.DisableServiceRequest.CheckIfServiceHasUsage check_if_service_has_usage = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckIfServiceHasUsage($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ServiceUsage\V1\DisableServiceRequest\CheckIfServiceHasUsage::class);
        $this->check_if_service_has_usage = $var;

        return $this;
    }

}

