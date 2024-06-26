<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.ListTables][google.bigtable.admin.v2.BigtableTableAdmin.ListTables]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ListTablesRequest</code>
 */
class ListTablesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the instance for which tables should be listed.
     * Values are of the form `projects/{project}/instances/{instance}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The view to be applied to the returned tables' fields.
     * Only NAME_ONLY view (default) and REPLICATION_VIEW are supported.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.View view = 2;</code>
     */
    private $view = 0;
    /**
     * Maximum number of results per page.
     * A page_size of zero lets the server choose the number of items to return.
     * A page_size which is strictly positive will return at most that many items.
     * A negative page_size will cause an error.
     * Following the first request, subsequent paginated calls are not required
     * to pass a page_size. If a page_size is set in subsequent calls, it must
     * match the page_size given in the first request.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
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
     *           Required. The unique name of the instance for which tables should be listed.
     *           Values are of the form `projects/{project}/instances/{instance}`.
     *     @type int $view
     *           The view to be applied to the returned tables' fields.
     *           Only NAME_ONLY view (default) and REPLICATION_VIEW are supported.
     *     @type int $page_size
     *           Maximum number of results per page.
     *           A page_size of zero lets the server choose the number of items to return.
     *           A page_size which is strictly positive will return at most that many items.
     *           A negative page_size will cause an error.
     *           Following the first request, subsequent paginated calls are not required
     *           to pass a page_size. If a page_size is set in subsequent calls, it must
     *           match the page_size given in the first request.
     *     @type string $page_token
     *           The value of `next_page_token` returned by a previous call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the instance for which tables should be listed.
     * Values are of the form `projects/{project}/instances/{instance}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The unique name of the instance for which tables should be listed.
     * Values are of the form `projects/{project}/instances/{instance}`.
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
     * The view to be applied to the returned tables' fields.
     * Only NAME_ONLY view (default) and REPLICATION_VIEW are supported.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.View view = 2;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The view to be applied to the returned tables' fields.
     * Only NAME_ONLY view (default) and REPLICATION_VIEW are supported.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.View view = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\Table\View::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Maximum number of results per page.
     * A page_size of zero lets the server choose the number of items to return.
     * A page_size which is strictly positive will return at most that many items.
     * A negative page_size will cause an error.
     * Following the first request, subsequent paginated calls are not required
     * to pass a page_size. If a page_size is set in subsequent calls, it must
     * match the page_size given in the first request.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of results per page.
     * A page_size of zero lets the server choose the number of items to return.
     * A page_size which is strictly positive will return at most that many items.
     * A negative page_size will cause an error.
     * Following the first request, subsequent paginated calls are not required
     * to pass a page_size. If a page_size is set in subsequent calls, it must
     * match the page_size given in the first request.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
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

