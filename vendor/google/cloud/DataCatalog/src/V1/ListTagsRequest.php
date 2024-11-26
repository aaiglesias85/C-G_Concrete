<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ListTags][google.cloud.datacatalog.v1.DataCatalog.ListTags].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ListTagsRequest</code>
 */
class ListTagsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Data Catalog resource to list the tags of.
     * The resource can be an [Entry][google.cloud.datacatalog.v1.Entry]
     * or an [EntryGroup][google.cloud.datacatalog.v1.EntryGroup]
     * (without `/entries/{entries}` at the end).
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of tags to return. Default is 10. Maximum limit is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Pagination token that specifies the next page to return. If empty, the
     * first page is returned.
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
     *           Required. The name of the Data Catalog resource to list the tags of.
     *           The resource can be an [Entry][google.cloud.datacatalog.v1.Entry]
     *           or an [EntryGroup][google.cloud.datacatalog.v1.EntryGroup]
     *           (without `/entries/{entries}` at the end).
     *     @type int $page_size
     *           The maximum number of tags to return. Default is 10. Maximum limit is 1000.
     *     @type string $page_token
     *           Pagination token that specifies the next page to return. If empty, the
     *           first page is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Data Catalog resource to list the tags of.
     * The resource can be an [Entry][google.cloud.datacatalog.v1.Entry]
     * or an [EntryGroup][google.cloud.datacatalog.v1.EntryGroup]
     * (without `/entries/{entries}` at the end).
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the Data Catalog resource to list the tags of.
     * The resource can be an [Entry][google.cloud.datacatalog.v1.Entry]
     * or an [EntryGroup][google.cloud.datacatalog.v1.EntryGroup]
     * (without `/entries/{entries}` at the end).
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
     * The maximum number of tags to return. Default is 10. Maximum limit is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of tags to return. Default is 10. Maximum limit is 1000.
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
     * Pagination token that specifies the next page to return. If empty, the
     * first page is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Pagination token that specifies the next page to return. If empty, the
     * first page is returned.
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

