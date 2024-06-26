<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/schema.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A column within a schema. Columns can be nested inside
 * other columns.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ColumnSchema</code>
 */
class ColumnSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the column.
     * Must be a UTF-8 string without dots (.).
     * The maximum size is 64 bytes.
     *
     * Generated from protobuf field <code>string column = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $column = '';
    /**
     * Required. Type of the column.
     * Must be a UTF-8 string with the maximum size of 128 bytes.
     *
     * Generated from protobuf field <code>string type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $type = '';
    /**
     * Optional. Description of the column. Default value is an empty string.
     * The description must be a UTF-8 string with the maximum size of 2000
     * bytes.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Optional. A column's mode indicates whether values in this column are required,
     * nullable, or repeated.
     * Only `NULLABLE`, `REQUIRED`, and `REPEATED` values are supported.
     * Default mode is `NULLABLE`.
     *
     * Generated from protobuf field <code>string mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $mode = '';
    /**
     * Optional. Schema of sub-columns. A column can have zero or more sub-columns.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.ColumnSchema subcolumns = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $subcolumns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $column
     *           Required. Name of the column.
     *           Must be a UTF-8 string without dots (.).
     *           The maximum size is 64 bytes.
     *     @type string $type
     *           Required. Type of the column.
     *           Must be a UTF-8 string with the maximum size of 128 bytes.
     *     @type string $description
     *           Optional. Description of the column. Default value is an empty string.
     *           The description must be a UTF-8 string with the maximum size of 2000
     *           bytes.
     *     @type string $mode
     *           Optional. A column's mode indicates whether values in this column are required,
     *           nullable, or repeated.
     *           Only `NULLABLE`, `REQUIRED`, and `REPEATED` values are supported.
     *           Default mode is `NULLABLE`.
     *     @type \Google\Cloud\DataCatalog\V1\ColumnSchema[]|\Google\Protobuf\Internal\RepeatedField $subcolumns
     *           Optional. Schema of sub-columns. A column can have zero or more sub-columns.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the column.
     * Must be a UTF-8 string without dots (.).
     * The maximum size is 64 bytes.
     *
     * Generated from protobuf field <code>string column = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Required. Name of the column.
     * Must be a UTF-8 string without dots (.).
     * The maximum size is 64 bytes.
     *
     * Generated from protobuf field <code>string column = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkString($var, True);
        $this->column = $var;

        return $this;
    }

    /**
     * Required. Type of the column.
     * Must be a UTF-8 string with the maximum size of 128 bytes.
     *
     * Generated from protobuf field <code>string type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Type of the column.
     * Must be a UTF-8 string with the maximum size of 128 bytes.
     *
     * Generated from protobuf field <code>string type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. Description of the column. Default value is an empty string.
     * The description must be a UTF-8 string with the maximum size of 2000
     * bytes.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the column. Default value is an empty string.
     * The description must be a UTF-8 string with the maximum size of 2000
     * bytes.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A column's mode indicates whether values in this column are required,
     * nullable, or repeated.
     * Only `NULLABLE`, `REQUIRED`, and `REPEATED` values are supported.
     * Default mode is `NULLABLE`.
     *
     * Generated from protobuf field <code>string mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Optional. A column's mode indicates whether values in this column are required,
     * nullable, or repeated.
     * Only `NULLABLE`, `REQUIRED`, and `REPEATED` values are supported.
     * Default mode is `NULLABLE`.
     *
     * Generated from protobuf field <code>string mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * Optional. Schema of sub-columns. A column can have zero or more sub-columns.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.ColumnSchema subcolumns = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubcolumns()
    {
        return $this->subcolumns;
    }

    /**
     * Optional. Schema of sub-columns. A column can have zero or more sub-columns.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.ColumnSchema subcolumns = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DataCatalog\V1\ColumnSchema[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubcolumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\ColumnSchema::class);
        $this->subcolumns = $arr;

        return $this;
    }

}

