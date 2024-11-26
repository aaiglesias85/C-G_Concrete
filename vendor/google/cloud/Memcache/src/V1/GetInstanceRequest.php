<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [GetInstance][google.cloud.memcache.v1.CloudMemcache.GetInstance].
 *
 * Generated from protobuf message <code>google.cloud.memcache.v1.GetInstanceRequest</code>
 */
class GetInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Memcached instance resource name in the format:
     *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     * where `location_id` refers to a GCP region
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Memcached instance resource name in the format:
     *               `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     *           where `location_id` refers to a GCP region
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memcache\V1\CloudMemcache::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Memcached instance resource name in the format:
     *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     * where `location_id` refers to a GCP region
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Memcached instance resource name in the format:
     *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     * where `location_id` refers to a GCP region
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

