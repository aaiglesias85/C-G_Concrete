<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.ListSnapshots][google.bigtable.admin.v2.BigtableTableAdmin.ListSnapshots]
 * Note: This is a private alpha release of Cloud Bigtable snapshots. This
 * feature is not currently available to most Cloud Bigtable customers. This
 * feature might be changed in backward-incompatible ways and is not recommended
 * for production use. It is not subject to any SLA or deprecation policy.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ListSnapshotsRequest</code>
 */
class ListSnapshotsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the cluster for which snapshots should be listed.
     * Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}`.
     * Use `{cluster} = '-'` to list snapshots for all clusters in an instance,
     * e.g., `projects/{project}/instances/{instance}/clusters/-`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of snapshots to return per page.
     * CURRENTLY UNIMPLEMENTED AND IGNORED.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The value of `next_page_token` returned by a previous call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The unique name of the cluster for which snapshots should be listed.
     *           Values are of the form
     *           `projects/{project}/instances/{instance}/clusters/{cluster}`.
     *           Use `{cluster} = '-'` to list snapshots for all clusters in an instance,
     *           e.g., `projects/{project}/instances/{instance}/clusters/-`.
     *     @type int $page_size
     *           The maximum number of snapshots to return per page.
     *           CURRENTLY UNIMPLEMENTED AND IGNORED.
     *     @type string $page_token
     *           The value of `next_page_token` returned by a previous call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the cluster for which snapshots should be listed.
     * Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}`.
     * Use `{cluster} = '-'` to list snapshots for all clusters in an instance,
     * e.g., `projects/{project}/instances/{instance}/clusters/-`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The unique name of the cluster for which snapshots should be listed.
     * Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}`.
     * Use `{cluster} = '-'` to list snapshots for all clusters in an instance,
     * e.g., `projects/{project}/instances/{instance}/clusters/-`.
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
     * The maximum number of snapshots to return per page.
     * CURRENTLY UNIMPLEMENTED AND IGNORED.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of snapshots to return per page.
     * CURRENTLY UNIMPLEMENTED AND IGNORED.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The value of `next_page_token` returned by a previous call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value of `next_page_token` returned by a previous call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

