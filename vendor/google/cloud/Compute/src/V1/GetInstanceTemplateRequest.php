<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for InstanceTemplates.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetInstanceTemplateRequest</code>
 */
class GetInstanceTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the instance template.
     *
     * Generated from protobuf field <code>string instance_template = 309248228 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_template = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_template
     *           The name of the instance template.
     *     @type string $project
     *           Project ID for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the instance template.
     *
     * Generated from protobuf field <code>string instance_template = 309248228 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceTemplate()
    {
        return $this->instance_template;
    }

    /**
     * The name of the instance template.
     *
     * Generated from protobuf field <code>string instance_template = 309248228 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_template = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

}

