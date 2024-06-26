<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [CreateInstance][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstance].
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project in which to create the instance. Values
     * are of the form `projects/<project>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ID of the instance to create.  Valid identifiers are of the
     * form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 2 and 64 characters in
     * length.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_id = '';
    /**
     * Required. The instance to create.  The name may be omitted, but if
     * specified must be `<parent>/instances/<instance_id>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the project in which to create the instance. Values
     *           are of the form `projects/<project>`.
     *     @type string $instance_id
     *           Required. The ID of the instance to create.  Valid identifiers are of the
     *           form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 2 and 64 characters in
     *           length.
     *     @type \Google\Cloud\Spanner\Admin\Instance\V1\Instance $instance
     *           Required. The instance to create.  The name may be omitted, but if
     *           specified must be `<parent>/instances/<instance_id>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project in which to create the instance. Values
     * are of the form `projects/<project>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project in which to create the instance. Values
     * are of the form `projects/<project>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The ID of the instance to create.  Valid identifiers are of the
     * form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 2 and 64 characters in
     * length.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Required. The ID of the instance to create.  Valid identifiers are of the
     * form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 2 and 64 characters in
     * length.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * Required. The instance to create.  The name may be omitted, but if
     * specified must be `<parent>/instances/<instance_id>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. The instance to create.  The name may be omitted, but if
     * specified must be `<parent>/instances/<instance_id>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\Admin\Instance\V1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Instance\V1\Instance::class);
        $this->instance = $var;

        return $this;
    }

}

