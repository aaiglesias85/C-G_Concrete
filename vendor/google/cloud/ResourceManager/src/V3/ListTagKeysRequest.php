<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_keys.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for listing all TagKeys under a parent resource.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.ListTagKeysRequest</code>
 */
class ListTagKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the new TagKey's parent.
     * Must be of the form `folders/{folder_id}` or `organizations/{org_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The maximum number of TagKeys to return in the response. The server allows
     * a maximum of 300 TagKeys to return. If unspecified, the server will use 100
     * as the default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A pagination token returned from a previous call to `ListTagKey`
     * that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the new TagKey's parent.
     *           Must be of the form `folders/{folder_id}` or `organizations/{org_id}`.
     *     @type int $page_size
     *           Optional. The maximum number of TagKeys to return in the response. The server allows
     *           a maximum of 300 TagKeys to return. If unspecified, the server will use 100
     *           as the default.
     *     @type string $page_token
     *           Optional. A pagination token returned from a previous call to `ListTagKey`
     *           that indicates where this listing should continue from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagKeys::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the new TagKey's parent.
     * Must be of the form `folders/{folder_id}` or `organizations/{org_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the new TagKey's parent.
     * Must be of the form `folders/{folder_id}` or `organizations/{org_id}`.
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
     * Optional. The maximum number of TagKeys to return in the response. The server allows
     * a maximum of 300 TagKeys to return. If unspecified, the server will use 100
     * as the default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of TagKeys to return in the response. The server allows
     * a maximum of 300 TagKeys to return. If unspecified, the server will use 100
     * as the default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A pagination token returned from a previous call to `ListTagKey`
     * that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A pagination token returned from a previous call to `ListTagKey`
     * that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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

