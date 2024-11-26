<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The batch request containing multiple pivot report requests.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.BatchRunPivotReportsRequest</code>
 */
class BatchRunPivotReportsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A property whose events are tracked. This entity must be specified for the
     * batch. The entity within RunPivotReportRequest may either be unspecified or
     * consistent with this entity.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.Entity entity = 1;</code>
     */
    private $entity = null;
    /**
     * Individual requests. Each request has a separate pivot report response.
     * Each batch request is allowed up to 5 requests.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.RunPivotReportRequest requests = 2;</code>
     */
    private $requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1alpha\Entity $entity
     *           A property whose events are tracked. This entity must be specified for the
     *           batch. The entity within RunPivotReportRequest may either be unspecified or
     *           consistent with this entity.
     *     @type \Google\Analytics\Data\V1alpha\RunPivotReportRequest[]|\Google\Protobuf\Internal\RepeatedField $requests
     *           Individual requests. Each request has a separate pivot report response.
     *           Each batch request is allowed up to 5 requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * A property whose events are tracked. This entity must be specified for the
     * batch. The entity within RunPivotReportRequest may either be unspecified or
     * consistent with this entity.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.Entity entity = 1;</code>
     * @return \Google\Analytics\Data\V1alpha\Entity|null
     */
    public function getEntity()
    {
        return isset($this->entity) ? $this->entity : null;
    }

    public function hasEntity()
    {
        return isset($this->entity);
    }

    public function clearEntity()
    {
        unset($this->entity);
    }

    /**
     * A property whose events are tracked. This entity must be specified for the
     * batch. The entity within RunPivotReportRequest may either be unspecified or
     * consistent with this entity.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.Entity entity = 1;</code>
     * @param \Google\Analytics\Data\V1alpha\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\Entity::class);
        $this->entity = $var;

        return $this;
    }

    /**
     * Individual requests. Each request has a separate pivot report response.
     * Each batch request is allowed up to 5 requests.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.RunPivotReportRequest requests = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Individual requests. Each request has a separate pivot report response.
     * Each batch request is allowed up to 5 requests.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.RunPivotReportRequest requests = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\RunPivotReportRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\RunPivotReportRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

