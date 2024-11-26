<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [TensorboardService.ListTensorboardTimeSeries][google.cloud.aiplatform.v1.TensorboardService.ListTensorboardTimeSeries].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListTensorboardTimeSeriesResponse</code>
 */
class ListTensorboardTimeSeriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The TensorboardTimeSeries mathching the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TensorboardTimeSeries tensorboard_time_series = 1;</code>
     */
    private $tensorboard_time_series;
    /**
     * A token, which can be sent as
     * [ListTensorboardTimeSeriesRequest.page_token][google.cloud.aiplatform.v1.ListTensorboardTimeSeriesRequest.page_token] to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries[]|\Google\Protobuf\Internal\RepeatedField $tensorboard_time_series
     *           The TensorboardTimeSeries mathching the request.
     *     @type string $next_page_token
     *           A token, which can be sent as
     *           [ListTensorboardTimeSeriesRequest.page_token][google.cloud.aiplatform.v1.ListTensorboardTimeSeriesRequest.page_token] to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * The TensorboardTimeSeries mathching the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TensorboardTimeSeries tensorboard_time_series = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTensorboardTimeSeries()
    {
        return $this->tensorboard_time_series;
    }

    /**
     * The TensorboardTimeSeries mathching the request.
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

    /**
     * A token, which can be sent as
     * [ListTensorboardTimeSeriesRequest.page_token][google.cloud.aiplatform.v1.ListTensorboardTimeSeriesRequest.page_token] to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as
     * [ListTensorboardTimeSeriesRequest.page_token][google.cloud.aiplatform.v1.ListTensorboardTimeSeriesRequest.page_token] to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

