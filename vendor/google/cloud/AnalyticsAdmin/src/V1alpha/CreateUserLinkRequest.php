<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateUserLink RPC.
 * Users can have multiple email addresses associated with their Google
 * account, and one of these email addresses is the "primary" email address.
 * Any of the email addresses associated with a Google account may be used
 * for a new UserLink, but the returned UserLink will always contain the
 * "primary" email address. As a result, the input and output email address
 * for this request may differ.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CreateUserLinkRequest</code>
 */
class CreateUserLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. If set, then email the new user notifying them that they've been granted
     * permissions to the resource.
     *
     * Generated from protobuf field <code>bool notify_new_user = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $notify_new_user = false;
    /**
     * Required. The user link to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.UserLink user_link = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $user_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Example format: accounts/1234
     *     @type bool $notify_new_user
     *           Optional. If set, then email the new user notifying them that they've been granted
     *           permissions to the resource.
     *     @type \Google\Analytics\Admin\V1alpha\UserLink $user_link
     *           Required. The user link to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Example format: accounts/1234
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
     * Optional. If set, then email the new user notifying them that they've been granted
     * permissions to the resource.
     *
     * Generated from protobuf field <code>bool notify_new_user = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getNotifyNewUser()
    {
        return $this->notify_new_user;
    }

    /**
     * Optional. If set, then email the new user notifying them that they've been granted
     * permissions to the resource.
     *
     * Generated from protobuf field <code>bool notify_new_user = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setNotifyNewUser($var)
    {
        GPBUtil::checkBool($var);
        $this->notify_new_user = $var;

        return $this;
    }

    /**
     * Required. The user link to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.UserLink user_link = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\UserLink|null
     */
    public function getUserLink()
    {
        return $this->user_link;
    }

    public function hasUserLink()
    {
        return isset($this->user_link);
    }

    public function clearUserLink()
    {
        unset($this->user_link);
    }

    /**
     * Required. The user link to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.UserLink user_link = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\UserLink $var
     * @return $this
     */
    public function setUserLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\UserLink::class);
        $this->user_link = $var;

        return $this;
    }

}

