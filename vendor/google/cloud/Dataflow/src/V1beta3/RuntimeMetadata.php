<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/templates.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RuntimeMetadata describing a runtime environment.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.RuntimeMetadata</code>
 */
class RuntimeMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * SDK Info for the template.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SDKInfo sdk_info = 1;</code>
     */
    private $sdk_info = null;
    /**
     * The parameters for the template.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ParameterMetadata parameters = 2;</code>
     */
    private $parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataflow\V1beta3\SDKInfo $sdk_info
     *           SDK Info for the template.
     *     @type \Google\Cloud\Dataflow\V1beta3\ParameterMetadata[]|\Google\Protobuf\Internal\RepeatedField $parameters
     *           The parameters for the template.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Templates::initOnce();
        parent::__construct($data);
    }

    /**
     * SDK Info for the template.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SDKInfo sdk_info = 1;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\SDKInfo|null
     */
    public function getSdkInfo()
    {
        return $this->sdk_info;
    }

    public function hasSdkInfo()
    {
        return isset($this->sdk_info);
    }

    public function clearSdkInfo()
    {
        unset($this->sdk_info);
    }

    /**
     * SDK Info for the template.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SDKInfo sdk_info = 1;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\SDKInfo $var
     * @return $this
     */
    public function setSdkInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\SDKInfo::class);
        $this->sdk_info = $var;

        return $this;
    }

    /**
     * The parameters for the template.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ParameterMetadata parameters = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * The parameters for the template.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ParameterMetadata parameters = 2;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\ParameterMetadata[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\ParameterMetadata::class);
        $this->parameters = $arr;

        return $this;
    }

}

