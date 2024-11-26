<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for the use of Kubernetes Service Accounts in GCP IAM
 * policies.
 *
 * Generated from protobuf message <code>google.container.v1.WorkloadIdentityConfig</code>
 */
class WorkloadIdentityConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The workload pool to attach all Kubernetes service accounts to.
     *
     * Generated from protobuf field <code>string workload_pool = 2;</code>
     */
    private $workload_pool = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $workload_pool
     *           The workload pool to attach all Kubernetes service accounts to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The workload pool to attach all Kubernetes service accounts to.
     *
     * Generated from protobuf field <code>string workload_pool = 2;</code>
     * @return string
     */
    public function getWorkloadPool()
    {
        return $this->workload_pool;
    }

    /**
     * The workload pool to attach all Kubernetes service accounts to.
     *
     * Generated from protobuf field <code>string workload_pool = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkloadPool($var)
    {
        GPBUtil::checkString($var, True);
        $this->workload_pool = $var;

        return $this;
    }

}

