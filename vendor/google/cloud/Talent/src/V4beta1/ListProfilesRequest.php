<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List profiles request.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.ListProfilesRequest</code>
 */
class ListProfilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the tenant under which the profile is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The filter string specifies the profiles to be enumerated.
     * Supported operator: =, AND
     * The field(s) eligible for filtering are:
     * * `externalId`
     * * `groupId`
     * externalId and groupId cannot be specified at the same time. If both
     * externalId and groupId are provided, the API will return a bad request
     * error.
     * Sample Query:
     * * externalId = "externalId-1"
     * * groupId = "groupId-1"
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     */
    private $filter = '';
    /**
     * The token that specifies the current offset (that is, starting result).
     * Please set the value to [ListProfilesResponse.next_page_token][google.cloud.talent.v4beta1.ListProfilesResponse.next_page_token] to
     * continue the list.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of profiles to be returned, at most 100.
     * Default is 100 unless a positive number smaller than 100 is specified.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * A field mask to specify the profile fields to be listed in response.
     * All fields are listed if it is unset.
     * Valid values are:
     * * name
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 4;</code>
     */
    private $read_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the tenant under which the profile is created.
     *           The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     *           "projects/foo/tenants/bar".
     *     @type string $filter
     *           The filter string specifies the profiles to be enumerated.
     *           Supported operator: =, AND
     *           The field(s) eligible for filtering are:
     *           * `externalId`
     *           * `groupId`
     *           externalId and groupId cannot be specified at the same time. If both
     *           externalId and groupId are provided, the API will return a bad request
     *           error.
     *           Sample Query:
     *           * externalId = "externalId-1"
     *           * groupId = "groupId-1"
     *     @type string $page_token
     *           The token that specifies the current offset (that is, starting result).
     *           Please set the value to [ListProfilesResponse.next_page_token][google.cloud.talent.v4beta1.ListProfilesResponse.next_page_token] to
     *           continue the list.
     *     @type int $page_size
     *           The maximum number of profiles to be returned, at most 100.
     *           Default is 100 unless a positive number smaller than 100 is specified.
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           A field mask to specify the profile fields to be listed in response.
     *           All fields are listed if it is unset.
     *           Valid values are:
     *           * name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\ProfileService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the tenant under which the profile is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the tenant under which the profile is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     * "projects/foo/tenants/bar".
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
     * The filter string specifies the profiles to be enumerated.
     * Supported operator: =, AND
     * The field(s) eligible for filtering are:
     * * `externalId`
     * * `groupId`
     * externalId and groupId cannot be specified at the same time. If both
     * externalId and groupId are provided, the API will return a bad request
     * error.
     * Sample Query:
     * * externalId = "externalId-1"
     * * groupId = "groupId-1"
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter string specifies the profiles to be enumerated.
     * Supported operator: =, AND
     * The field(s) eligible for filtering are:
     * * `externalId`
     * * `groupId`
     * externalId and groupId cannot be specified at the same time. If both
     * externalId and groupId are provided, the API will return a bad request
     * error.
     * Sample Query:
     * * externalId = "externalId-1"
     * * groupId = "groupId-1"
     *
     * Generated from protobuf field <code>string filter = 5;</code>
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
     * The token that specifies the current offset (that is, starting result).
     * Please set the value to [ListProfilesResponse.next_page_token][google.cloud.talent.v4beta1.ListProfilesResponse.next_page_token] to
     * continue the list.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The token that specifies the current offset (that is, starting result).
     * Please set the value to [ListProfilesResponse.next_page_token][google.cloud.talent.v4beta1.ListProfilesResponse.next_page_token] to
     * continue the list.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
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
     * The maximum number of profiles to be returned, at most 100.
     * Default is 100 unless a positive number smaller than 100 is specified.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of profiles to be returned, at most 100.
     * Default is 100 unless a positive number smaller than 100 is specified.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
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
     * A field mask to specify the profile fields to be listed in response.
     * All fields are listed if it is unset.
     * Valid values are:
     * * name
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * A field mask to specify the profile fields to be listed in response.
     * All fields are listed if it is unset.
     * Valid values are:
     * * name
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}

