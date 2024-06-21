<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_values.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for getting a TagValue.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.GetTagValueRequest</code>
 */
class GetTagValueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name for TagValue to be fetched in the format `tagValues/456`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name for TagValue to be fetched in the format `tagValues/456`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagValues::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name for TagValue to be fetched in the format `tagValues/456`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name for TagValue to be fetched in the format `tagValues/456`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

