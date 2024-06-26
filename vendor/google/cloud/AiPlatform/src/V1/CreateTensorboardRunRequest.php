<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [TensorboardService.CreateTensorboardRun][google.cloud.aiplatform.v1.TensorboardService.CreateTensorboardRun].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateTensorboardRunRequest</code>
 */
class CreateTensorboardRunRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the TensorboardExperiment to create the TensorboardRun
     * in. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The TensorboardRun to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardRun tensorboard_run = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $tensorboard_run = null;
    /**
     * Required. The ID to use for the Tensorboard run, which will become the final
     * component of the Tensorboard run's resource name.
     * This value should be 1-128 characters, and valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string tensorboard_run_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $tensorboard_run_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the TensorboardExperiment to create the TensorboardRun
     *           in. Format:
     *           `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}`
     *     @type \Google\Cloud\AIPlatform\V1\TensorboardRun $tensorboard_run
     *           Required. The TensorboardRun to create.
     *     @type string $tensorboard_run_id
     *           Required. The ID to use for the Tensorboard run, which will become the final
     *           component of the Tensorboard run's resource name.
     *           This value should be 1-128 characters, and valid characters
     *           are /[a-z][0-9]-/.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the TensorboardExperiment to create the TensorboardRun
     * in. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the TensorboardExperiment to create the TensorboardRun
     * in. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}`
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
     * Required. The TensorboardRun to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardRun tensorboard_run = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\TensorboardRun|null
     */
    public function getTensorboardRun()
    {
        return $this->tensorboard_run;
    }

    public function hasTensorboardRun()
    {
        return isset($this->tensorboard_run);
    }

    public function clearTensorboardRun()
    {
        unset($this->tensorboard_run);
    }

    /**
     * Required. The TensorboardRun to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardRun tensorboard_run = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\TensorboardRun $var
     * @return $this
     */
    public function setTensorboardRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TensorboardRun::class);
        $this->tensorboard_run = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the Tensorboard run, which will become the final
     * component of the Tensorboard run's resource name.
     * This value should be 1-128 characters, and valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string tensorboard_run_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTensorboardRunId()
    {
        return $this->tensorboard_run_id;
    }

    /**
     * Required. The ID to use for the Tensorboard run, which will become the final
     * component of the Tensorboard run's resource name.
     * This value should be 1-128 characters, and valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string tensorboard_run_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTensorboardRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tensorboard_run_id = $var;

        return $this;
    }

}

