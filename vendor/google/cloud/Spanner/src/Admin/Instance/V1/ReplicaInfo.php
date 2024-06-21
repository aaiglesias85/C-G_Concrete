<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.ReplicaInfo</code>
 */
class ReplicaInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The location of the serving resources, e.g. "us-central1".
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    private $location = '';
    /**
     * The type of replica.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.ReplicaInfo.ReplicaType type = 2;</code>
     */
    private $type = 0;
    /**
     * If true, this location is designated as the default leader location where
     * leader replicas are placed. See the [region types
     * documentation](https://cloud.google.com/spanner/docs/instances#region_types)
     * for more details.
     *
     * Generated from protobuf field <code>bool default_leader_location = 3;</code>
     */
    private $default_leader_location = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           The location of the serving resources, e.g. "us-central1".
     *     @type int $type
     *           The type of replica.
     *     @type bool $default_leader_location
     *           If true, this location is designated as the default leader location where
     *           leader replicas are placed. See the [region types
     *           documentation](https://cloud.google.com/spanner/docs/instances#region_types)
     *           for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The location of the serving resources, e.g. "us-central1".
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location of the serving resources, e.g. "us-central1".
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The type of replica.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.ReplicaInfo.ReplicaType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of replica.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.ReplicaInfo.ReplicaType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Instance\V1\ReplicaInfo\ReplicaType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * If true, this location is designated as the default leader location where
     * leader replicas are placed. See the [region types
     * documentation](https://cloud.google.com/spanner/docs/instances#region_types)
     * for more details.
     *
     * Generated from protobuf field <code>bool default_leader_location = 3;</code>
     * @return bool
     */
    public function getDefaultLeaderLocation()
    {
        return $this->default_leader_location;
    }

    /**
     * If true, this location is designated as the default leader location where
     * leader replicas are placed. See the [region types
     * documentation](https://cloud.google.com/spanner/docs/instances#region_types)
     * for more details.
     *
     * Generated from protobuf field <code>bool default_leader_location = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDefaultLeaderLocation($var)
    {
        GPBUtil::checkBool($var);
        $this->default_leader_location = $var;

        return $this;
    }

}

