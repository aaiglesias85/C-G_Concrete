<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for BackendBuckets.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetBackendBucketRequest</code>
 */
class GetBackendBucketRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the BackendBucket resource to return.
     *
     * Generated from protobuf field <code>string backend_bucket = 91714037 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $backend_bucket = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backend_bucket
     *           Name of the BackendBucket resource to return.
     *     @type string $project
     *           Project ID for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the BackendBucket resource to return.
     *
     * Generated from protobuf field <code>string backend_bucket = 91714037 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackendBucket()
    {
        return $this->backend_bucket;
    }

    /**
     * Name of the BackendBucket resource to return.
     *
     * Generated from protobuf field <code>string backend_bucket = 91714037 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackendBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->backend_bucket = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

}

