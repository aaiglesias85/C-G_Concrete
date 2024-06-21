<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This operation resource represents operations that may have happened or are
 * happening on the cluster. All fields are output only.
 *
 * Generated from protobuf message <code>google.container.v1.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    /**
     * The server-assigned ID for the operation.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * operation is taking place. This field is deprecated, use location instead.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $zone = '';
    /**
     * The operation type.
     *
     * Generated from protobuf field <code>.google.container.v1.Operation.Type operation_type = 3;</code>
     */
    private $operation_type = 0;
    /**
     * The current status of the operation.
     *
     * Generated from protobuf field <code>.google.container.v1.Operation.Status status = 4;</code>
     */
    private $status = 0;
    /**
     * Detailed operation progress, if available.
     *
     * Generated from protobuf field <code>string detail = 8;</code>
     */
    private $detail = '';
    /**
     * Output only. If an error has occurred, a textual description of the error.
     * Deprecated. Use the field error instead.
     *
     * Generated from protobuf field <code>string status_message = 5 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @deprecated
     */
    protected $status_message = '';
    /**
     * Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 6;</code>
     */
    private $self_link = '';
    /**
     * Server-defined URL for the target of the operation.
     *
     * Generated from protobuf field <code>string target_link = 7;</code>
     */
    private $target_link = '';
    /**
     * [Output only] The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones#available)
     * or
     * [region](https://cloud.google.com/compute/docs/regions-zones/regions-zones#available)
     * in which the cluster resides.
     *
     * Generated from protobuf field <code>string location = 9;</code>
     */
    private $location = '';
    /**
     * [Output only] The time the operation started, in
     * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string start_time = 10;</code>
     */
    private $start_time = '';
    /**
     * [Output only] The time the operation completed, in
     * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string end_time = 11;</code>
     */
    private $end_time = '';
    /**
     * Output only. [Output only] Progress information for an operation.
     *
     * Generated from protobuf field <code>.google.container.v1.OperationProgress progress = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $progress = null;
    /**
     * Which conditions caused the current cluster state.
     * Deprecated. Use field error instead.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.StatusCondition cluster_conditions = 13 [deprecated = true];</code>
     * @deprecated
     */
    private $cluster_conditions;
    /**
     * Which conditions caused the current node pool state.
     * Deprecated. Use field error instead.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.StatusCondition nodepool_conditions = 14 [deprecated = true];</code>
     * @deprecated
     */
    private $nodepool_conditions;
    /**
     * The error result of the operation in case of failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 15;</code>
     */
    private $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The server-assigned ID for the operation.
     *     @type string $zone
     *           The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     *           operation is taking place. This field is deprecated, use location instead.
     *     @type int $operation_type
     *           The operation type.
     *     @type int $status
     *           The current status of the operation.
     *     @type string $detail
     *           Detailed operation progress, if available.
     *     @type string $status_message
     *           Output only. If an error has occurred, a textual description of the error.
     *           Deprecated. Use the field error instead.
     *     @type string $self_link
     *           Server-defined URL for the resource.
     *     @type string $target_link
     *           Server-defined URL for the target of the operation.
     *     @type string $location
     *           [Output only] The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones#available)
     *           or
     *           [region](https://cloud.google.com/compute/docs/regions-zones/regions-zones#available)
     *           in which the cluster resides.
     *     @type string $start_time
     *           [Output only] The time the operation started, in
     *           [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *     @type string $end_time
     *           [Output only] The time the operation completed, in
     *           [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *     @type \Google\Cloud\Container\V1\OperationProgress $progress
     *           Output only. [Output only] Progress information for an operation.
     *     @type \Google\Cloud\Container\V1\StatusCondition[]|\Google\Protobuf\Internal\RepeatedField $cluster_conditions
     *           Which conditions caused the current cluster state.
     *           Deprecated. Use field error instead.
     *     @type \Google\Cloud\Container\V1\StatusCondition[]|\Google\Protobuf\Internal\RepeatedField $nodepool_conditions
     *           Which conditions caused the current node pool state.
     *           Deprecated. Use field error instead.
     *     @type \Google\Rpc\Status $error
     *           The error result of the operation in case of failure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The server-assigned ID for the operation.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The server-assigned ID for the operation.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * operation is taking place. This field is deprecated, use location instead.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getZone()
    {
        @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        return $this->zone;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * operation is taking place. This field is deprecated, use location instead.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setZone($var)
    {
        @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The operation type.
     *
     * Generated from protobuf field <code>.google.container.v1.Operation.Type operation_type = 3;</code>
     * @return int
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * The operation type.
     *
     * Generated from protobuf field <code>.google.container.v1.Operation.Type operation_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\Operation\Type::class);
        $this->operation_type = $var;

        return $this;
    }

    /**
     * The current status of the operation.
     *
     * Generated from protobuf field <code>.google.container.v1.Operation.Status status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current status of the operation.
     *
     * Generated from protobuf field <code>.google.container.v1.Operation.Status status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\Operation\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Detailed operation progress, if available.
     *
     * Generated from protobuf field <code>string detail = 8;</code>
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Detailed operation progress, if available.
     *
     * Generated from protobuf field <code>string detail = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->detail = $var;

        return $this;
    }

    /**
     * Output only. If an error has occurred, a textual description of the error.
     * Deprecated. Use the field error instead.
     *
     * Generated from protobuf field <code>string status_message = 5 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     * @deprecated
     */
    public function getStatusMessage()
    {
        @trigger_error('status_message is deprecated.', E_USER_DEPRECATED);
        return $this->status_message;
    }

    /**
     * Output only. If an error has occurred, a textual description of the error.
     * Deprecated. Use the field error instead.
     *
     * Generated from protobuf field <code>string status_message = 5 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setStatusMessage($var)
    {
        @trigger_error('status_message is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

    /**
     * Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 6;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Server-defined URL for the target of the operation.
     *
     * Generated from protobuf field <code>string target_link = 7;</code>
     * @return string
     */
    public function getTargetLink()
    {
        return $this->target_link;
    }

    /**
     * Server-defined URL for the target of the operation.
     *
     * Generated from protobuf field <code>string target_link = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_link = $var;

        return $this;
    }

    /**
     * [Output only] The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones#available)
     * or
     * [region](https://cloud.google.com/compute/docs/regions-zones/regions-zones#available)
     * in which the cluster resides.
     *
     * Generated from protobuf field <code>string location = 9;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * [Output only] The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones#available)
     * or
     * [region](https://cloud.google.com/compute/docs/regions-zones/regions-zones#available)
     * in which the cluster resides.
     *
     * Generated from protobuf field <code>string location = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * [Output only] The time the operation started, in
     * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string start_time = 10;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * [Output only] The time the operation started, in
     * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string start_time = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_time = $var;

        return $this;
    }

    /**
     * [Output only] The time the operation completed, in
     * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string end_time = 11;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * [Output only] The time the operation completed, in
     * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string end_time = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. [Output only] Progress information for an operation.
     *
     * Generated from protobuf field <code>.google.container.v1.OperationProgress progress = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Container\V1\OperationProgress|null
     */
    public function getProgress()
    {
        return $this->progress;
    }

    public function hasProgress()
    {
        return isset($this->progress);
    }

    public function clearProgress()
    {
        unset($this->progress);
    }

    /**
     * Output only. [Output only] Progress information for an operation.
     *
     * Generated from protobuf field <code>.google.container.v1.OperationProgress progress = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Container\V1\OperationProgress $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\OperationProgress::class);
        $this->progress = $var;

        return $this;
    }

    /**
     * Which conditions caused the current cluster state.
     * Deprecated. Use field error instead.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.StatusCondition cluster_conditions = 13 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getClusterConditions()
    {
        @trigger_error('cluster_conditions is deprecated.', E_USER_DEPRECATED);
        return $this->cluster_conditions;
    }

    /**
     * Which conditions caused the current cluster state.
     * Deprecated. Use field error instead.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.StatusCondition cluster_conditions = 13 [deprecated = true];</code>
     * @param \Google\Cloud\Container\V1\StatusCondition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setClusterConditions($var)
    {
        @trigger_error('cluster_conditions is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\StatusCondition::class);
        $this->cluster_conditions = $arr;

        return $this;
    }

    /**
     * Which conditions caused the current node pool state.
     * Deprecated. Use field error instead.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.StatusCondition nodepool_conditions = 14 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getNodepoolConditions()
    {
        @trigger_error('nodepool_conditions is deprecated.', E_USER_DEPRECATED);
        return $this->nodepool_conditions;
    }

    /**
     * Which conditions caused the current node pool state.
     * Deprecated. Use field error instead.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.StatusCondition nodepool_conditions = 14 [deprecated = true];</code>
     * @param \Google\Cloud\Container\V1\StatusCondition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setNodepoolConditions($var)
    {
        @trigger_error('nodepool_conditions is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\StatusCondition::class);
        $this->nodepool_conditions = $arr;

        return $this;
    }

    /**
     * The error result of the operation in case of failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 15;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * The error result of the operation in case of failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 15;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

}

