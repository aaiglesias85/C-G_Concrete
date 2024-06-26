<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BatchCreateUserLinks RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.BatchCreateUserLinksRequest</code>
 */
class BatchCreateUserLinksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The account or property that all user links in the request are for.
     * This field is required. The parent field in the CreateUserLinkRequest
     * messages must either be empty or match this field.
     * Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. If set, then email the new users notifying them that they've been granted
     * permissions to the resource. Regardless of whether this is set or not,
     * notify_new_user field inside each individual request is ignored.
     *
     * Generated from protobuf field <code>bool notify_new_users = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $notify_new_users = false;
    /**
     * Required. The requests specifying the user links to create.
     * A maximum of 1000 user links can be created in a batch.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CreateUserLinkRequest requests = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The account or property that all user links in the request are for.
     *           This field is required. The parent field in the CreateUserLinkRequest
     *           messages must either be empty or match this field.
     *           Example format: accounts/1234
     *     @type bool $notify_new_users
     *           Optional. If set, then email the new users notifying them that they've been granted
     *           permissions to the resource. Regardless of whether this is set or not,
     *           notify_new_user field inside each individual request is ignored.
     *     @type \Google\Analytics\Admin\V1alpha\CreateUserLinkRequest[]|\Google\Protobuf\Internal\RepeatedField $requests
     *           Required. The requests specifying the user links to create.
     *           A maximum of 1000 user links can be created in a batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The account or property that all user links in the request are for.
     * This field is required. The parent field in the CreateUserLinkRequest
     * messages must either be empty or match this field.
     * Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The account or property that all user links in the request are for.
     * This field is required. The parent field in the CreateUserLinkRequest
     * messages must either be empty or match this field.
     * Example format: accounts/1234
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
     * Optional. If set, then email the new users notifying them that they've been granted
     * permissions to the resource. Regardless of whether this is set or not,
     * notify_new_user field inside each individual request is ignored.
     *
     * Generated from protobuf field <code>bool notify_new_users = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getNotifyNewUsers()
    {
        return $this->notify_new_users;
    }

    /**
     * Optional. If set, then email the new users notifying them that they've been granted
     * permissions to the resource. Regardless of whether this is set or not,
     * notify_new_user field inside each individual request is ignored.
     *
     * Generated from protobuf field <code>bool notify_new_users = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setNotifyNewUsers($var)
    {
        GPBUtil::checkBool($var);
        $this->notify_new_users = $var;

        return $this;
    }

    /**
     * Required. The requests specifying the user links to create.
     * A maximum of 1000 user links can be created in a batch.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CreateUserLinkRequest requests = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Required. The requests specifying the user links to create.
     * A maximum of 1000 user links can be created in a batch.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CreateUserLinkRequest requests = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\CreateUserLinkRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\CreateUserLinkRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

