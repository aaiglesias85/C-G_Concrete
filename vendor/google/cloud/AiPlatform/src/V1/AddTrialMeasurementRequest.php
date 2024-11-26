<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vizier_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [VizierService.AddTrialMeasurement][google.cloud.aiplatform.v1.VizierService.AddTrialMeasurement].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.AddTrialMeasurementRequest</code>
 */
class AddTrialMeasurementRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the trial to add measurement.
     * Format:
     * `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *
     * Generated from protobuf field <code>string trial_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $trial_name = '';
    /**
     * Required. The measurement to be added to a Trial.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Measurement measurement = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $measurement = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $trial_name
     *           Required. The name of the trial to add measurement.
     *           Format:
     *           `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *     @type \Google\Cloud\AIPlatform\V1\Measurement $measurement
     *           Required. The measurement to be added to a Trial.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VizierService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the trial to add measurement.
     * Format:
     * `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *
     * Generated from protobuf field <code>string trial_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTrialName()
    {
        return $this->trial_name;
    }

    /**
     * Required. The name of the trial to add measurement.
     * Format:
     * `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *
     * Generated from protobuf field <code>string trial_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTrialName($var)
    {
        GPBUtil::checkString($var, True);
        $this->trial_name = $var;

        return $this;
    }

    /**
     * Required. The measurement to be added to a Trial.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Measurement measurement = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Measurement|null
     */
    public function getMeasurement()
    {
        return $this->measurement;
    }

    public function hasMeasurement()
    {
        return isset($this->measurement);
    }

    public function clearMeasurement()
    {
        unset($this->measurement);
    }

    /**
     * Required. The measurement to be added to a Trial.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Measurement measurement = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Measurement $var
     * @return $this
     */
    public function setMeasurement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Measurement::class);
        $this->measurement = $var;

        return $this;
    }

}

