<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1\BatchReadFeatureValuesRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describe pass-through fields in read_instance source.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchReadFeatureValuesRequest.PassThroughField</code>
 */
class PassThroughField extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the field in the CSV header or the name of the column in
     * BigQuery table. The naming restriction is the same as [Feature.name][google.cloud.aiplatform.v1.Feature.name].
     *
     * Generated from protobuf field <code>string field_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $field_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_name
     *           Required. The name of the field in the CSV header or the name of the column in
     *           BigQuery table. The naming restriction is the same as [Feature.name][google.cloud.aiplatform.v1.Feature.name].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the field in the CSV header or the name of the column in
     * BigQuery table. The naming restriction is the same as [Feature.name][google.cloud.aiplatform.v1.Feature.name].
     *
     * Generated from protobuf field <code>string field_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * Required. The name of the field in the CSV header or the name of the column in
     * BigQuery table. The naming restriction is the same as [Feature.name][google.cloud.aiplatform.v1.Feature.name].
     *
     * Generated from protobuf field <code>string field_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;

        return $this;
    }

}


