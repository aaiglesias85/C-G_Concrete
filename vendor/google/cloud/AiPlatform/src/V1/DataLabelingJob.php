<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/data_labeling_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DataLabelingJob is used to trigger a human labeling job on unlabeled data
 * from the following Dataset:
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DataLabelingJob</code>
 */
class DataLabelingJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the DataLabelingJob.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. The user-defined name of the DataLabelingJob.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     * Display name of a DataLabelingJob.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Required. Dataset resource names. Right now we only support labeling from a single
     * Dataset.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>repeated string datasets = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $datasets;
    /**
     * Labels to assign to annotations generated by this DataLabelingJob.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> annotation_labels = 12;</code>
     */
    private $annotation_labels;
    /**
     * Required. Number of labelers to work on each DataItem.
     *
     * Generated from protobuf field <code>int32 labeler_count = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $labeler_count = 0;
    /**
     * Required. The Google Cloud Storage location of the instruction pdf. This pdf is
     * shared with labelers, and provides detailed description on how to label
     * DataItems in Datasets.
     *
     * Generated from protobuf field <code>string instruction_uri = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instruction_uri = '';
    /**
     * Required. Points to a YAML file stored on Google Cloud Storage describing the
     * config for a specific type of DataLabelingJob.
     * The schema files that can be used here are found in the
     * https://storage.googleapis.com/google-cloud-aiplatform bucket in the
     * /schema/datalabelingjob/inputs/ folder.
     *
     * Generated from protobuf field <code>string inputs_schema_uri = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $inputs_schema_uri = '';
    /**
     * Required. Input config parameters for the DataLabelingJob.
     *
     * Generated from protobuf field <code>.google.protobuf.Value inputs = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $inputs = null;
    /**
     * Output only. The detailed state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JobState state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Current labeling job progress percentage scaled in interval [0, 100],
     * indicating the percentage of DataItems that has been finished.
     *
     * Generated from protobuf field <code>int32 labeling_progress = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $labeling_progress = 0;
    /**
     * Output only. Estimated cost(in US dollars) that the DataLabelingJob has incurred to
     * date.
     *
     * Generated from protobuf field <code>.google.type.Money current_spend = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $current_spend = null;
    /**
     * Output only. Timestamp when this DataLabelingJob was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Timestamp when this DataLabelingJob was updated most recently.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. DataLabelingJob errors. It is only populated when job's state is
     * `JOB_STATE_FAILED` or `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $error = null;
    /**
     * The labels with user-defined metadata to organize your DataLabelingJobs.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable. Following system labels exist for each DataLabelingJob:
     * * "aiplatform.googleapis.com/schema": output only, its value is the
     *   [inputs_schema][google.cloud.aiplatform.v1.DataLabelingJob.inputs_schema_uri]'s title.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11;</code>
     */
    private $labels;
    /**
     * The SpecialistPools' resource names associated with this job.
     *
     * Generated from protobuf field <code>repeated string specialist_pools = 16;</code>
     */
    private $specialist_pools;
    /**
     * Customer-managed encryption key spec for a DataLabelingJob. If set, this
     * DataLabelingJob will be secured by this key.
     * Note: Annotations created in the DataLabelingJob are associated with
     * the EncryptionSpec of the Dataset they are exported to.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 20;</code>
     */
    private $encryption_spec = null;
    /**
     * Parameters that configure the active learning pipeline. Active learning
     * will label the data incrementally via several iterations. For every
     * iteration, it will select a batch of data based on the sampling strategy.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ActiveLearningConfig active_learning_config = 21;</code>
     */
    private $active_learning_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the DataLabelingJob.
     *     @type string $display_name
     *           Required. The user-defined name of the DataLabelingJob.
     *           The name can be up to 128 characters long and can be consist of any UTF-8
     *           characters.
     *           Display name of a DataLabelingJob.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $datasets
     *           Required. Dataset resource names. Right now we only support labeling from a single
     *           Dataset.
     *           Format:
     *           `projects/{project}/locations/{location}/datasets/{dataset}`
     *     @type array|\Google\Protobuf\Internal\MapField $annotation_labels
     *           Labels to assign to annotations generated by this DataLabelingJob.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *           System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     *           and are immutable.
     *     @type int $labeler_count
     *           Required. Number of labelers to work on each DataItem.
     *     @type string $instruction_uri
     *           Required. The Google Cloud Storage location of the instruction pdf. This pdf is
     *           shared with labelers, and provides detailed description on how to label
     *           DataItems in Datasets.
     *     @type string $inputs_schema_uri
     *           Required. Points to a YAML file stored on Google Cloud Storage describing the
     *           config for a specific type of DataLabelingJob.
     *           The schema files that can be used here are found in the
     *           https://storage.googleapis.com/google-cloud-aiplatform bucket in the
     *           /schema/datalabelingjob/inputs/ folder.
     *     @type \Google\Protobuf\Value $inputs
     *           Required. Input config parameters for the DataLabelingJob.
     *     @type int $state
     *           Output only. The detailed state of the job.
     *     @type int $labeling_progress
     *           Output only. Current labeling job progress percentage scaled in interval [0, 100],
     *           indicating the percentage of DataItems that has been finished.
     *     @type \Google\Type\Money $current_spend
     *           Output only. Estimated cost(in US dollars) that the DataLabelingJob has incurred to
     *           date.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this DataLabelingJob was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this DataLabelingJob was updated most recently.
     *     @type \Google\Rpc\Status $error
     *           Output only. DataLabelingJob errors. It is only populated when job's state is
     *           `JOB_STATE_FAILED` or `JOB_STATE_CANCELLED`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels with user-defined metadata to organize your DataLabelingJobs.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *           System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     *           and are immutable. Following system labels exist for each DataLabelingJob:
     *           * "aiplatform.googleapis.com/schema": output only, its value is the
     *             [inputs_schema][google.cloud.aiplatform.v1.DataLabelingJob.inputs_schema_uri]'s title.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $specialist_pools
     *           The SpecialistPools' resource names associated with this job.
     *     @type \Google\Cloud\AIPlatform\V1\EncryptionSpec $encryption_spec
     *           Customer-managed encryption key spec for a DataLabelingJob. If set, this
     *           DataLabelingJob will be secured by this key.
     *           Note: Annotations created in the DataLabelingJob are associated with
     *           the EncryptionSpec of the Dataset they are exported to.
     *     @type \Google\Cloud\AIPlatform\V1\ActiveLearningConfig $active_learning_config
     *           Parameters that configure the active learning pipeline. Active learning
     *           will label the data incrementally via several iterations. For every
     *           iteration, it will select a batch of data based on the sampling strategy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DataLabelingJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the DataLabelingJob.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the DataLabelingJob.
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
     * Required. The user-defined name of the DataLabelingJob.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     * Display name of a DataLabelingJob.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The user-defined name of the DataLabelingJob.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     * Display name of a DataLabelingJob.
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
     * Required. Dataset resource names. Right now we only support labeling from a single
     * Dataset.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>repeated string datasets = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatasets()
    {
        return $this->datasets;
    }

    /**
     * Required. Dataset resource names. Right now we only support labeling from a single
     * Dataset.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>repeated string datasets = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatasets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->datasets = $arr;

        return $this;
    }

    /**
     * Labels to assign to annotations generated by this DataLabelingJob.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> annotation_labels = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotationLabels()
    {
        return $this->annotation_labels;
    }

    /**
     * Labels to assign to annotations generated by this DataLabelingJob.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> annotation_labels = 12;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotationLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotation_labels = $arr;

        return $this;
    }

    /**
     * Required. Number of labelers to work on each DataItem.
     *
     * Generated from protobuf field <code>int32 labeler_count = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getLabelerCount()
    {
        return $this->labeler_count;
    }

    /**
     * Required. Number of labelers to work on each DataItem.
     *
     * Generated from protobuf field <code>int32 labeler_count = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setLabelerCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->labeler_count = $var;

        return $this;
    }

    /**
     * Required. The Google Cloud Storage location of the instruction pdf. This pdf is
     * shared with labelers, and provides detailed description on how to label
     * DataItems in Datasets.
     *
     * Generated from protobuf field <code>string instruction_uri = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstructionUri()
    {
        return $this->instruction_uri;
    }

    /**
     * Required. The Google Cloud Storage location of the instruction pdf. This pdf is
     * shared with labelers, and provides detailed description on how to label
     * DataItems in Datasets.
     *
     * Generated from protobuf field <code>string instruction_uri = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstructionUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->instruction_uri = $var;

        return $this;
    }

    /**
     * Required. Points to a YAML file stored on Google Cloud Storage describing the
     * config for a specific type of DataLabelingJob.
     * The schema files that can be used here are found in the
     * https://storage.googleapis.com/google-cloud-aiplatform bucket in the
     * /schema/datalabelingjob/inputs/ folder.
     *
     * Generated from protobuf field <code>string inputs_schema_uri = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInputsSchemaUri()
    {
        return $this->inputs_schema_uri;
    }

    /**
     * Required. Points to a YAML file stored on Google Cloud Storage describing the
     * config for a specific type of DataLabelingJob.
     * The schema files that can be used here are found in the
     * https://storage.googleapis.com/google-cloud-aiplatform bucket in the
     * /schema/datalabelingjob/inputs/ folder.
     *
     * Generated from protobuf field <code>string inputs_schema_uri = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInputsSchemaUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->inputs_schema_uri = $var;

        return $this;
    }

    /**
     * Required. Input config parameters for the DataLabelingJob.
     *
     * Generated from protobuf field <code>.google.protobuf.Value inputs = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    public function hasInputs()
    {
        return isset($this->inputs);
    }

    public function clearInputs()
    {
        unset($this->inputs);
    }

    /**
     * Required. Input config parameters for the DataLabelingJob.
     *
     * Generated from protobuf field <code>.google.protobuf.Value inputs = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setInputs($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->inputs = $var;

        return $this;
    }

    /**
     * Output only. The detailed state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JobState state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The detailed state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JobState state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\JobState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Current labeling job progress percentage scaled in interval [0, 100],
     * indicating the percentage of DataItems that has been finished.
     *
     * Generated from protobuf field <code>int32 labeling_progress = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLabelingProgress()
    {
        return $this->labeling_progress;
    }

    /**
     * Output only. Current labeling job progress percentage scaled in interval [0, 100],
     * indicating the percentage of DataItems that has been finished.
     *
     * Generated from protobuf field <code>int32 labeling_progress = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLabelingProgress($var)
    {
        GPBUtil::checkInt32($var);
        $this->labeling_progress = $var;

        return $this;
    }

    /**
     * Output only. Estimated cost(in US dollars) that the DataLabelingJob has incurred to
     * date.
     *
     * Generated from protobuf field <code>.google.type.Money current_spend = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Type\Money|null
     */
    public function getCurrentSpend()
    {
        return $this->current_spend;
    }

    public function hasCurrentSpend()
    {
        return isset($this->current_spend);
    }

    public function clearCurrentSpend()
    {
        unset($this->current_spend);
    }

    /**
     * Output only. Estimated cost(in US dollars) that the DataLabelingJob has incurred to
     * date.
     *
     * Generated from protobuf field <code>.google.type.Money current_spend = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Type\Money $var
     * @return $this
     */
    public function setCurrentSpend($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Money::class);
        $this->current_spend = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this DataLabelingJob was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this DataLabelingJob was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this DataLabelingJob was updated most recently.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp when this DataLabelingJob was updated most recently.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. DataLabelingJob errors. It is only populated when job's state is
     * `JOB_STATE_FAILED` or `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. DataLabelingJob errors. It is only populated when job's state is
     * `JOB_STATE_FAILED` or `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * The labels with user-defined metadata to organize your DataLabelingJobs.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable. Following system labels exist for each DataLabelingJob:
     * * "aiplatform.googleapis.com/schema": output only, its value is the
     *   [inputs_schema][google.cloud.aiplatform.v1.DataLabelingJob.inputs_schema_uri]'s title.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels with user-defined metadata to organize your DataLabelingJobs.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable. Following system labels exist for each DataLabelingJob:
     * * "aiplatform.googleapis.com/schema": output only, its value is the
     *   [inputs_schema][google.cloud.aiplatform.v1.DataLabelingJob.inputs_schema_uri]'s title.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The SpecialistPools' resource names associated with this job.
     *
     * Generated from protobuf field <code>repeated string specialist_pools = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpecialistPools()
    {
        return $this->specialist_pools;
    }

    /**
     * The SpecialistPools' resource names associated with this job.
     *
     * Generated from protobuf field <code>repeated string specialist_pools = 16;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpecialistPools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->specialist_pools = $arr;

        return $this;
    }

    /**
     * Customer-managed encryption key spec for a DataLabelingJob. If set, this
     * DataLabelingJob will be secured by this key.
     * Note: Annotations created in the DataLabelingJob are associated with
     * the EncryptionSpec of the Dataset they are exported to.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 20;</code>
     * @return \Google\Cloud\AIPlatform\V1\EncryptionSpec|null
     */
    public function getEncryptionSpec()
    {
        return $this->encryption_spec;
    }

    public function hasEncryptionSpec()
    {
        return isset($this->encryption_spec);
    }

    public function clearEncryptionSpec()
    {
        unset($this->encryption_spec);
    }

    /**
     * Customer-managed encryption key spec for a DataLabelingJob. If set, this
     * DataLabelingJob will be secured by this key.
     * Note: Annotations created in the DataLabelingJob are associated with
     * the EncryptionSpec of the Dataset they are exported to.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 20;</code>
     * @param \Google\Cloud\AIPlatform\V1\EncryptionSpec $var
     * @return $this
     */
    public function setEncryptionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EncryptionSpec::class);
        $this->encryption_spec = $var;

        return $this;
    }

    /**
     * Parameters that configure the active learning pipeline. Active learning
     * will label the data incrementally via several iterations. For every
     * iteration, it will select a batch of data based on the sampling strategy.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ActiveLearningConfig active_learning_config = 21;</code>
     * @return \Google\Cloud\AIPlatform\V1\ActiveLearningConfig|null
     */
    public function getActiveLearningConfig()
    {
        return $this->active_learning_config;
    }

    public function hasActiveLearningConfig()
    {
        return isset($this->active_learning_config);
    }

    public function clearActiveLearningConfig()
    {
        unset($this->active_learning_config);
    }

    /**
     * Parameters that configure the active learning pipeline. Active learning
     * will label the data incrementally via several iterations. For every
     * iteration, it will select a batch of data based on the sampling strategy.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ActiveLearningConfig active_learning_config = 21;</code>
     * @param \Google\Cloud\AIPlatform\V1\ActiveLearningConfig $var
     * @return $this
     */
    public function setActiveLearningConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ActiveLearningConfig::class);
        $this->active_learning_config = $var;

        return $this;
    }

}

