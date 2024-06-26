<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1/resources.proto

namespace Google\Cloud\ServiceUsage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A service that is available for use by the consumer.
 *
 * Generated from protobuf message <code>google.api.serviceusage.v1.Service</code>
 */
class Service extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the consumer and service.
     * A valid name would be:
     * - projects/123/services/serviceusage.googleapis.com
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The resource name of the consumer.
     * A valid name would be:
     * - projects/123
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     */
    private $parent = '';
    /**
     * The service configuration of the available service.
     * Some fields may be filtered out of the configuration in responses to
     * the `ListServices` method. These fields are present only in responses to
     * the `GetService` method.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.ServiceConfig config = 2;</code>
     */
    private $config = null;
    /**
     * Whether or not the service has been enabled for use by the consumer.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.State state = 4;</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the consumer and service.
     *           A valid name would be:
     *           - projects/123/services/serviceusage.googleapis.com
     *     @type string $parent
     *           The resource name of the consumer.
     *           A valid name would be:
     *           - projects/123
     *     @type \Google\Cloud\ServiceUsage\V1\ServiceConfig $config
     *           The service configuration of the available service.
     *           Some fields may be filtered out of the configuration in responses to
     *           the `ListServices` method. These fields are present only in responses to
     *           the `GetService` method.
     *     @type int $state
     *           Whether or not the service has been enabled for use by the consumer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Serviceusage\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the consumer and service.
     * A valid name would be:
     * - projects/123/services/serviceusage.googleapis.com
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the consumer and service.
     * A valid name would be:
     * - projects/123/services/serviceusage.googleapis.com
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
     * The resource name of the consumer.
     * A valid name would be:
     * - projects/123
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The resource name of the consumer.
     * A valid name would be:
     * - projects/123
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The service configuration of the available service.
     * Some fields may be filtered out of the configuration in responses to
     * the `ListServices` method. These fields are present only in responses to
     * the `GetService` method.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.ServiceConfig config = 2;</code>
     * @return \Google\Cloud\ServiceUsage\V1\ServiceConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * The service configuration of the available service.
     * Some fields may be filtered out of the configuration in responses to
     * the `ListServices` method. These fields are present only in responses to
     * the `GetService` method.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.ServiceConfig config = 2;</code>
     * @param \Google\Cloud\ServiceUsage\V1\ServiceConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceUsage\V1\ServiceConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Whether or not the service has been enabled for use by the consumer.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.State state = 4;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Whether or not the service has been enabled for use by the consumer.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.State state = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ServiceUsage\V1\State::class);
        $this->state = $var;

        return $this;
    }

}

