<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateUserLink RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateUserLinkRequest</code>
 */
class UpdateUserLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The user link to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.UserLink user_link = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $user_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\UserLink $user_link
     *           Required. The user link to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The user link to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.UserLink user_link = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The user link to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.UserLink user_link = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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

