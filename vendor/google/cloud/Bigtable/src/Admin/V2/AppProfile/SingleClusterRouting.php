<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2\AppProfile;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Unconditionally routes all read/write requests to a specific cluster.
 * This option preserves read-your-writes consistency but does not improve
 * availability.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.AppProfile.SingleClusterRouting</code>
 */
class SingleClusterRouting extends \Google\Protobuf\Internal\Message
{
    /**
     * The cluster to which read/write requests should be routed.
     *
     * Generated from protobuf field <code>string cluster_id = 1;</code>
     */
    private $cluster_id = '';
    /**
     * Whether or not `CheckAndMutateRow` and `ReadModifyWriteRow` requests are
     * allowed by this app profile. It is unsafe to send these requests to
     * the same table/row/column in multiple clusters.
     *
     * Generated from protobuf field <code>bool allow_transactional_writes = 2;</code>
     */
    private $allow_transactional_writes = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster_id
     *           The cluster to which read/write requests should be routed.
     *     @type bool $allow_transactional_writes
     *           Whether or not `CheckAndMutateRow` and `ReadModifyWriteRow` requests are
     *           allowed by this app profile. It is unsafe to send these requests to
     *           the same table/row/column in multiple clusters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * The cluster to which read/write requests should be routed.
     *
     * Generated from protobuf field <code>string cluster_id = 1;</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * The cluster to which read/write requests should be routed.
     *
     * Generated from protobuf field <code>string cluster_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Whether or not `CheckAndMutateRow` and `ReadModifyWriteRow` requests are
     * allowed by this app profile. It is unsafe to send these requests to
     * the same table/row/column in multiple clusters.
     *
     * Generated from protobuf field <code>bool allow_transactional_writes = 2;</code>
     * @return bool
     */
    public function getAllowTransactionalWrites()
    {
        return $this->allow_transactional_writes;
    }

    /**
     * Whether or not `CheckAndMutateRow` and `ReadModifyWriteRow` requests are
     * allowed by this app profile. It is unsafe to send these requests to
     * the same table/row/column in multiple clusters.
     *
     * Generated from protobuf field <code>bool allow_transactional_writes = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowTransactionalWrites($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_transactional_writes = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SingleClusterRouting::class, \Google\Cloud\Bigtable\Admin\V2\AppProfile_SingleClusterRouting::class);

