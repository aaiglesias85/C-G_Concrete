<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for VideoStitcherService.listSlates.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.ListSlatesRequest</code>
 */
class ListSlatesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project to list slates, in the form of `projects/{project_number}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Requested page size. Server may return fewer items than requested.
     * If unspecified, server will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Filtering results
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';
    /**
     * Hint for how to order the results
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    private $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project to list slates, in the form of `projects/{project_number}`.
     *     @type int $page_size
     *           Requested page size. Server may return fewer items than requested.
     *           If unspecified, server will pick an appropriate default.
     *     @type string $page_token
     *           A token identifying a page of results the server should return.
     *     @type string $filter
     *           Filtering results
     *     @type string $order_by
     *           Hint for how to order the results
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project to list slates, in the form of `projects/{project_number}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project to list slates, in the form of `projects/{project_number}`.
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
     * Requested page size. Server may return fewer items than requested.
     * If unspecified, server will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested page size. Server may return fewer items than requested.
     * If unspecified, server will pick an appropriate default.
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
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results the server should return.
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

    /**
     * Filtering results
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filtering results
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Hint for how to order the results
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Hint for how to order the results
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

