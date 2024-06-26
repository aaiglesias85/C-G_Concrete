<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datasource.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1\ImportedDataInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines schema of a field in the imported data.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.ImportedDataInfo.FieldSchema</code>
 */
class FieldSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Field name. Matches: [A-Za-z_][A-Za-z_0-9]{0,127}
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     */
    private $field_name = '';
    /**
     * Field type
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ImportedDataInfo.FieldSchema.Type type = 2;</code>
     */
    private $type = 0;
    /**
     * Is field repeated.
     *
     * Generated from protobuf field <code>bool is_repeated = 3;</code>
     */
    private $is_repeated = false;
    /**
     * Description for this field.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     */
    private $description = '';
    /**
     * Present iff type == RECORD.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ImportedDataInfo.RecordSchema schema = 5;</code>
     */
    private $schema = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_name
     *           Field name. Matches: [A-Za-z_][A-Za-z_0-9]{0,127}
     *     @type int $type
     *           Field type
     *     @type bool $is_repeated
     *           Is field repeated.
     *     @type string $description
     *           Description for this field.
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\ImportedDataInfo\RecordSchema $schema
     *           Present iff type == RECORD.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datasource::initOnce();
        parent::__construct($data);
    }

    /**
     * Field name. Matches: [A-Za-z_][A-Za-z_0-9]{0,127}
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * Field name. Matches: [A-Za-z_][A-Za-z_0-9]{0,127}
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;

        return $this;
    }

    /**
     * Field type
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ImportedDataInfo.FieldSchema.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Field type
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ImportedDataInfo.FieldSchema.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\DataTransfer\V1\ImportedDataInfo_FieldSchema_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Is field repeated.
     *
     * Generated from protobuf field <code>bool is_repeated = 3;</code>
     * @return bool
     */
    public function getIsRepeated()
    {
        return $this->is_repeated;
    }

    /**
     * Is field repeated.
     *
     * Generated from protobuf field <code>bool is_repeated = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRepeated($var)
    {
        GPBUtil::checkBool($var);
        $this->is_repeated = $var;

        return $this;
    }

    /**
     * Description for this field.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description for this field.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Present iff type == RECORD.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ImportedDataInfo.RecordSchema schema = 5;</code>
     * @return \Google\Cloud\BigQuery\DataTransfer\V1\ImportedDataInfo\RecordSchema
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Present iff type == RECORD.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ImportedDataInfo.RecordSchema schema = 5;</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\ImportedDataInfo\RecordSchema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataTransfer\V1\ImportedDataInfo_RecordSchema::class);
        $this->schema = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldSchema::class, \Google\Cloud\BigQuery\DataTransfer\V1\ImportedDataInfo_FieldSchema::class);

