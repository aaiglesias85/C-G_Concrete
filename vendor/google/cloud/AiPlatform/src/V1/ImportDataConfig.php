<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the location from where we import data into a Dataset, together
 * with the labels that will be applied to the DataItems and the Annotations.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ImportDataConfig</code>
 */
class ImportDataConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Labels that will be applied to newly imported DataItems. If an identical
     * DataItem as one being imported already exists in the Dataset, then these
     * labels will be appended to these of the already existing one, and if labels
     * with identical key is imported before, the old label value will be
     * overwritten. If two DataItems are identical in the same import data
     * operation, the labels will be combined and if key collision happens in this
     * case, one of the values will be picked randomly. Two DataItems are
     * considered identical if their content bytes are identical (e.g. image bytes
     * or pdf bytes).
     * These labels will be overridden by Annotation labels specified inside index
     * file referenced by [import_schema_uri][google.cloud.aiplatform.v1.ImportDataConfig.import_schema_uri], e.g. jsonl file.
     *
     * Generated from protobuf field <code>map<string, string> data_item_labels = 2;</code>
     */
    private $data_item_labels;
    /**
     * Required. Points to a YAML file stored on Google Cloud Storage describing the import
     * format. Validation will be done against the schema. The schema is defined
     * as an [OpenAPI 3.0.2 Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *
     * Generated from protobuf field <code>string import_schema_uri = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $import_schema_uri = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GcsSource $gcs_source
     *           The Google Cloud Storage location for the input content.
     *     @type array|\Google\Protobuf\Internal\MapField $data_item_labels
     *           Labels that will be applied to newly imported DataItems. If an identical
     *           DataItem as one being imported already exists in the Dataset, then these
     *           labels will be appended to these of the already existing one, and if labels
     *           with identical key is imported before, the old label value will be
     *           overwritten. If two DataItems are identical in the same import data
     *           operation, the labels will be combined and if key collision happens in this
     *           case, one of the values will be picked randomly. Two DataItems are
     *           considered identical if their content bytes are identical (e.g. image bytes
     *           or pdf bytes).
     *           These labels will be overridden by Annotation labels specified inside index
     *           file referenced by [import_schema_uri][google.cloud.aiplatform.v1.ImportDataConfig.import_schema_uri], e.g. jsonl file.
     *     @type string $import_schema_uri
     *           Required. Points to a YAML file stored on Google Cloud Storage describing the import
     *           format. Validation will be done against the schema. The schema is defined
     *           as an [OpenAPI 3.0.2 Schema
     *           Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsSource gcs_source = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(1);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * The Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsSource gcs_source = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GcsSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Labels that will be applied to newly imported DataItems. If an identical
     * DataItem as one being imported already exists in the Dataset, then these
     * labels will be appended to these of the already existing one, and if labels
     * with identical key is imported before, the old label value will be
     * overwritten. If two DataItems are identical in the same import data
     * operation, the labels will be combined and if key collision happens in this
     * case, one of the values will be picked randomly. Two DataItems are
     * considered identical if their content bytes are identical (e.g. image bytes
     * or pdf bytes).
     * These labels will be overridden by Annotation labels specified inside index
     * file referenced by [import_schema_uri][google.cloud.aiplatform.v1.ImportDataConfig.import_schema_uri], e.g. jsonl file.
     *
     * Generated from protobuf field <code>map<string, string> data_item_labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDataItemLabels()
    {
        return $this->data_item_labels;
    }

    /**
     * Labels that will be applied to newly imported DataItems. If an identical
     * DataItem as one being imported already exists in the Dataset, then these
     * labels will be appended to these of the already existing one, and if labels
     * with identical key is imported before, the old label value will be
     * overwritten. If two DataItems are identical in the same import data
     * operation, the labels will be combined and if key collision happens in this
     * case, one of the values will be picked randomly. Two DataItems are
     * considered identical if their content bytes are identical (e.g. image bytes
     * or pdf bytes).
     * These labels will be overridden by Annotation labels specified inside index
     * file referenced by [import_schema_uri][google.cloud.aiplatform.v1.ImportDataConfig.import_schema_uri], e.g. jsonl file.
     *
     * Generated from protobuf field <code>map<string, string> data_item_labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDataItemLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data_item_labels = $arr;

        return $this;
    }

    /**
     * Required. Points to a YAML file stored on Google Cloud Storage describing the import
     * format. Validation will be done against the schema. The schema is defined
     * as an [OpenAPI 3.0.2 Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *
     * Generated from protobuf field <code>string import_schema_uri = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getImportSchemaUri()
    {
        return $this->import_schema_uri;
    }

    /**
     * Required. Points to a YAML file stored on Google Cloud Storage describing the import
     * format. Validation will be done against the schema. The schema is defined
     * as an [OpenAPI 3.0.2 Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *
     * Generated from protobuf field <code>string import_schema_uri = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setImportSchemaUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->import_schema_uri = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

