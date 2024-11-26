<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListUserLinks RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ListUserLinksResponse</code>
 */
class ListUserLinksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of UserLinks. These will be ordered stably, but in an arbitrary order.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.UserLink user_links = 1;</code>
     */
    private $user_links;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\UserLink[]|\Google\Protobuf\Internal\RepeatedField $user_links
     *           List of UserLinks. These will be ordered stably, but in an arbitrary order.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * List of UserLinks. These will be ordered stably, but in an arbitrary order.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.UserLink user_links = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserLinks()
    {
        return $this->user_links;
    }

    /**
     * List of UserLinks. These will be ordered stably, but in an arbitrary order.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.UserLink user_links = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\UserLink[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\UserLink::class);
        $this->user_links = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

