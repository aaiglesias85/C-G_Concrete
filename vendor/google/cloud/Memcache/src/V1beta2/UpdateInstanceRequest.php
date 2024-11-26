<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1beta2/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [UpdateInstance][google.cloud.memcache.v1beta2.CloudMemcache.UpdateInstance].
 *
 * Generated from protobuf message <code>google.cloud.memcache.v1beta2.UpdateInstanceRequest</code>
 */
class UpdateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Mask of fields to update.
     *  *  `displayName`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Required. A Memcached [Instance] resource.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1beta2.Instance resource = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update.
     *            *  `displayName`
     *     @type \Google\Cloud\Memcache\V1beta2\Instance $resource
     *           Required. A Memcached [Instance] resource.
     *           Only fields specified in update_mask are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memcache\V1Beta2\CloudMemcache::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Mask of fields to update.
     *  *  `displayName`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update.
     *  *  `displayName`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. A Memcached [Instance] resource.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1beta2.Instance resource = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Memcache\V1beta2\Instance|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Required. A Memcached [Instance] resource.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1beta2.Instance resource = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Memcache\V1beta2\Instance $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Memcache\V1beta2\Instance::class);
        $this->resource = $var;

        return $this;
    }

}

