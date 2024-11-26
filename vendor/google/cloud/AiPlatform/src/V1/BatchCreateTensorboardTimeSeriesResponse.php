<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [TensorboardService.BatchCreateTensorboardTimeSeries][google.cloud.aiplatform.v1.TensorboardService.BatchCreateTensorboardTimeSeries].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchCreateTensorboardTimeSeriesResponse</code>
 */
class BatchCreateTensorboardTimeSeriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The created TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TensorboardTimeSeries tensorboard_time_series = 1;</code>
     */
    private $tensorboard_time_series;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries[]|\Google\Protobuf\Internal\RepeatedField $tensorboard_time_series
     *           The created TensorboardTimeSeries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * The created TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TensorboardTimeSeries tensorboard_time_series = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTensorboardTimeSeries()
    {
        return $this->tensorboard_time_series;
    }

    /**
     * The created TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TensorboardTimeSeries tensorboard_time_series = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTensorboardTimeSeries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries::class);
        $this->tensorboard_time_series = $arr;

        return $this;
    }

}

