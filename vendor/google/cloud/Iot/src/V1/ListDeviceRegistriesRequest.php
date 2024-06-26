<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/device_manager.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for `ListDeviceRegistries`.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.ListDeviceRegistriesRequest</code>
 */
class ListDeviceRegistriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and cloud region path. For example,
     * `projects/example-project/locations/us-central1`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of registries to return in the response. If this value
     * is zero, the service will select a default size. A call may return fewer
     * objects than requested. A non-empty `next_page_token` in the response
     * indicates that more data is available.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The value returned by the last `ListDeviceRegistriesResponse`; indicates
     * that this is a continuation of a prior `ListDeviceRegistries` call and
     * the system should return the next page of data.
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
     *           Required. The project and cloud region path. For example,
     *           `projects/example-project/locations/us-central1`.
     *     @type int $page_size
     *           The maximum number of registries to return in the response. If this value
     *           is zero, the service will select a default size. A call may return fewer
     *           objects than requested. A non-empty `next_page_token` in the response
     *           indicates that more data is available.
     *     @type string $page_token
     *           The value returned by the last `ListDeviceRegistriesResponse`; indicates
     *           that this is a continuation of a prior `ListDeviceRegistries` call and
     *           the system should return the next page of data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\DeviceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and cloud region path. For example,
     * `projects/example-project/locations/us-central1`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and cloud region path. For example,
     * `projects/example-project/locations/us-central1`.
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
     * The maximum number of registries to return in the response. If this value
     * is zero, the service will select a default size. A call may return fewer
     * objects than requested. A non-empty `next_page_token` in the response
     * indicates that more data is available.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of registries to return in the response. If this value
     * is zero, the service will select a default size. A call may return fewer
     * objects than requested. A non-empty `next_page_token` in the response
     * indicates that more data is available.
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
     * The value returned by the last `ListDeviceRegistriesResponse`; indicates
     * that this is a continuation of a prior `ListDeviceRegistries` call and
     * the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListDeviceRegistriesResponse`; indicates
     * that this is a continuation of a prior `ListDeviceRegistries` call and
     * the system should return the next page of data.
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

