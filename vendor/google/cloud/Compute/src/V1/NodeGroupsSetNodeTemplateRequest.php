<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeGroupsSetNodeTemplateRequest</code>
 */
class NodeGroupsSetNodeTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Full or partial URL of the node template resource to be updated for this node group.
     *
     * Generated from protobuf field <code>optional string node_template = 323154455;</code>
     */
    private $node_template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_template
     *           Full or partial URL of the node template resource to be updated for this node group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Full or partial URL of the node template resource to be updated for this node group.
     *
     * Generated from protobuf field <code>optional string node_template = 323154455;</code>
     * @return string
     */
    public function getNodeTemplate()
    {
        return isset($this->node_template) ? $this->node_template : '';
    }

    public function hasNodeTemplate()
    {
        return isset($this->node_template);
    }

    public function clearNodeTemplate()
    {
        unset($this->node_template);
    }

    /**
     * Full or partial URL of the node template resource to be updated for this node group.
     *
     * Generated from protobuf field <code>optional string node_template = 323154455;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_template = $var;

        return $this;
    }

}

