<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message representing a Study.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Study</code>
 */
class Study extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of a study. The study's globally unique identifier.
     * Format: `projects/{project}/locations/{location}/studies/{study}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Describes the Study, default value is empty string.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Required. Configuration of the Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec study_spec = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $study_spec = null;
    /**
     * Output only. The detailed state of a Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Study.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Time at which the study was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. A human readable reason why the Study is inactive.
     * This should be empty if a study is ACTIVE or COMPLETED.
     *
     * Generated from protobuf field <code>string inactive_reason = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $inactive_reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of a study. The study's globally unique identifier.
     *           Format: `projects/{project}/locations/{location}/studies/{study}`
     *     @type string $display_name
     *           Required. Describes the Study, default value is empty string.
     *     @type \Google\Cloud\AIPlatform\V1\StudySpec $study_spec
     *           Required. Configuration of the Study.
     *     @type int $state
     *           Output only. The detailed state of a Study.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time at which the study was created.
     *     @type string $inactive_reason
     *           Output only. A human readable reason why the Study is inactive.
     *           This should be empty if a study is ACTIVE or COMPLETED.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of a study. The study's globally unique identifier.
     * Format: `projects/{project}/locations/{location}/studies/{study}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of a study. The study's globally unique identifier.
     * Format: `projects/{project}/locations/{location}/studies/{study}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. Describes the Study, default value is empty string.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Describes the Study, default value is empty string.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. Configuration of the Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec study_spec = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\StudySpec|null
     */
    public function getStudySpec()
    {
        return $this->study_spec;
    }

    public function hasStudySpec()
    {
        return isset($this->study_spec);
    }

    public function clearStudySpec()
    {
        unset($this->study_spec);
    }

    /**
     * Required. Configuration of the Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec study_spec = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\StudySpec $var
     * @return $this
     */
    public function setStudySpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StudySpec::class);
        $this->study_spec = $var;

        return $this;
    }

    /**
     * Output only. The detailed state of a Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Study.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The detailed state of a Study.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Study.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Study\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Time at which the study was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time at which the study was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. A human readable reason why the Study is inactive.
     * This should be empty if a study is ACTIVE or COMPLETED.
     *
     * Generated from protobuf field <code>string inactive_reason = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInactiveReason()
    {
        return $this->inactive_reason;
    }

    /**
     * Output only. A human readable reason why the Study is inactive.
     * This should be empty if a study is ACTIVE or COMPLETED.
     *
     * Generated from protobuf field <code>string inactive_reason = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInactiveReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->inactive_reason = $var;

        return $this;
    }

}

