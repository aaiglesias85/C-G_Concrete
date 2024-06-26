<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/migratable_resource.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents one resource that exists in automl.googleapis.com,
 * datalabeling.googleapis.com or ml.googleapis.com.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.MigratableResource</code>
 */
class MigratableResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Timestamp when the last migration attempt on this MigratableResource
     * started. Will not be set if there's no migration attempt on this
     * MigratableResource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_migrate_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $last_migrate_time = null;
    /**
     * Output only. Timestamp when this MigratableResource was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $last_update_time = null;
    protected $resource;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\MigratableResource\MlEngineModelVersion $ml_engine_model_version
     *           Output only. Represents one Version in ml.googleapis.com.
     *     @type \Google\Cloud\AIPlatform\V1\MigratableResource\AutomlModel $automl_model
     *           Output only. Represents one Model in automl.googleapis.com.
     *     @type \Google\Cloud\AIPlatform\V1\MigratableResource\AutomlDataset $automl_dataset
     *           Output only. Represents one Dataset in automl.googleapis.com.
     *     @type \Google\Cloud\AIPlatform\V1\MigratableResource\DataLabelingDataset $data_labeling_dataset
     *           Output only. Represents one Dataset in datalabeling.googleapis.com.
     *     @type \Google\Protobuf\Timestamp $last_migrate_time
     *           Output only. Timestamp when the last migration attempt on this MigratableResource
     *           started. Will not be set if there's no migration attempt on this
     *           MigratableResource.
     *     @type \Google\Protobuf\Timestamp $last_update_time
     *           Output only. Timestamp when this MigratableResource was last updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MigratableResource::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Represents one Version in ml.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigratableResource.MlEngineModelVersion ml_engine_model_version = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\MigratableResource\MlEngineModelVersion|null
     */
    public function getMlEngineModelVersion()
    {
        return $this->readOneof(1);
    }

    public function hasMlEngineModelVersion()
    {
        return $this->hasOneof(1);
    }

    /**
     * Output only. Represents one Version in ml.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigratableResource.MlEngineModelVersion ml_engine_model_version = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\MigratableResource\MlEngineModelVersion $var
     * @return $this
     */
    public function setMlEngineModelVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\MigratableResource\MlEngineModelVersion::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Output only. Represents one Model in automl.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigratableResource.AutomlModel automl_model = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\MigratableResource\AutomlModel|null
     */
    public function getAutomlModel()
    {
        return $this->readOneof(2);
    }

    public function hasAutomlModel()
    {
        return $this->hasOneof(2);
    }

    /**
     * Output only. Represents one Model in automl.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigratableResource.AutomlModel automl_model = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\MigratableResource\AutomlModel $var
     * @return $this
     */
    public function setAutomlModel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\MigratableResource\AutomlModel::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Output only. Represents one Dataset in automl.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigratableResource.AutomlDataset automl_dataset = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\MigratableResource\AutomlDataset|null
     */
    public function getAutomlDataset()
    {
        return $this->readOneof(3);
    }

    public function hasAutomlDataset()
    {
        return $this->hasOneof(3);
    }

    /**
     * Output only. Represents one Dataset in automl.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigratableResource.AutomlDataset automl_dataset = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\MigratableResource\AutomlDataset $var
     * @return $this
     */
    public function setAutomlDataset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\MigratableResource\AutomlDataset::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Output only. Represents one Dataset in datalabeling.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigratableResource.DataLabelingDataset data_labeling_dataset = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\MigratableResource\DataLabelingDataset|null
     */
    public function getDataLabelingDataset()
    {
        return $this->readOneof(4);
    }

    public function hasDataLabelingDataset()
    {
        return $this->hasOneof(4);
    }

    /**
     * Output only. Represents one Dataset in datalabeling.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigratableResource.DataLabelingDataset data_labeling_dataset = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\MigratableResource\DataLabelingDataset $var
     * @return $this
     */
    public function setDataLabelingDataset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\MigratableResource\DataLabelingDataset::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. Timestamp when the last migration attempt on this MigratableResource
     * started. Will not be set if there's no migration attempt on this
     * MigratableResource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_migrate_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastMigrateTime()
    {
        return $this->last_migrate_time;
    }

    public function hasLastMigrateTime()
    {
        return isset($this->last_migrate_time);
    }

    public function clearLastMigrateTime()
    {
        unset($this->last_migrate_time);
    }

    /**
     * Output only. Timestamp when the last migration attempt on this MigratableResource
     * started. Will not be set if there's no migration attempt on this
     * MigratableResource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_migrate_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastMigrateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_migrate_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this MigratableResource was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastUpdateTime()
    {
        return $this->last_update_time;
    }

    public function hasLastUpdateTime()
    {
        return isset($this->last_update_time);
    }

    public function clearLastUpdateTime()
    {
        unset($this->last_update_time);
    }

    /**
     * Output only. Timestamp when this MigratableResource was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_update_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->whichOneof("resource");
    }

}

