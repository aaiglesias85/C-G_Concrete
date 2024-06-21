<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/table_spec.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A specification of a relational table.
 * The table's schema is represented via its child column specs. It is
 * pre-populated as part of ImportData by schema inference algorithm, the
 * version of which is a required parameter of ImportData InputConfig.
 * Note: While working with a table, at times the schema may be
 * inconsistent with the data in the table (e.g. string in a FLOAT64 column).
 * The consistency validation is done upon creation of a model.
 * Used by:
 *   *   Tables
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TableSpec</code>
 */
class TableSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the table spec.
     * Form:
     * `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/tableSpecs/{table_spec_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * column_spec_id of the time column. Only used if the parent dataset's
     * ml_use_column_spec_id is not set. Used to split rows into TRAIN, VALIDATE
     * and TEST sets such that oldest rows go to TRAIN set, newest to TEST, and
     * those in between to VALIDATE.
     * Required type: TIMESTAMP.
     * If both this column and ml_use_column are not set, then ML use of all rows
     * will be assigned by AutoML. NOTE: Updates of this field will instantly
     * affect any other users concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string time_column_spec_id = 2;</code>
     */
    private $time_column_spec_id = '';
    /**
     * Output only. The number of rows (i.e. examples) in the table.
     *
     * Generated from protobuf field <code>int64 row_count = 3;</code>
     */
    private $row_count = 0;
    /**
     * Output only. The number of valid rows (i.e. without values that don't match
     * DataType-s of their columns).
     *
     * Generated from protobuf field <code>int64 valid_row_count = 4;</code>
     */
    private $valid_row_count = 0;
    /**
     * Output only. The number of columns of the table. That is, the number of
     * child ColumnSpec-s.
     *
     * Generated from protobuf field <code>int64 column_count = 7;</code>
     */
    private $column_count = 0;
    /**
     * Output only. Input configs via which data currently residing in the table
     * had been imported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.InputConfig input_configs = 5;</code>
     */
    private $input_configs;
    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the table spec.
     *           Form:
     *           `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/tableSpecs/{table_spec_id}`
     *     @type string $time_column_spec_id
     *           column_spec_id of the time column. Only used if the parent dataset's
     *           ml_use_column_spec_id is not set. Used to split rows into TRAIN, VALIDATE
     *           and TEST sets such that oldest rows go to TRAIN set, newest to TEST, and
     *           those in between to VALIDATE.
     *           Required type: TIMESTAMP.
     *           If both this column and ml_use_column are not set, then ML use of all rows
     *           will be assigned by AutoML. NOTE: Updates of this field will instantly
     *           affect any other users concurrently working with the dataset.
     *     @type int|string $row_count
     *           Output only. The number of rows (i.e. examples) in the table.
     *     @type int|string $valid_row_count
     *           Output only. The number of valid rows (i.e. without values that don't match
     *           DataType-s of their columns).
     *     @type int|string $column_count
     *           Output only. The number of columns of the table. That is, the number of
     *           child ColumnSpec-s.
     *     @type \Google\Cloud\AutoMl\V1beta1\InputConfig[]|\Google\Protobuf\Internal\RepeatedField $input_configs
     *           Output only. Input configs via which data currently residing in the table
     *           had been imported.
     *     @type string $etag
     *           Used to perform consistent read-modify-write updates. If not set, a blind
     *           "overwrite" update happens.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TableSpec::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the table spec.
     * Form:
     * `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/tableSpecs/{table_spec_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the table spec.
     * Form:
     * `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/tableSpecs/{table_spec_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * column_spec_id of the time column. Only used if the parent dataset's
     * ml_use_column_spec_id is not set. Used to split rows into TRAIN, VALIDATE
     * and TEST sets such that oldest rows go to TRAIN set, newest to TEST, and
     * those in between to VALIDATE.
     * Required type: TIMESTAMP.
     * If both this column and ml_use_column are not set, then ML use of all rows
     * will be assigned by AutoML. NOTE: Updates of this field will instantly
     * affect any other users concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string time_column_spec_id = 2;</code>
     * @return string
     */
    public function getTimeColumnSpecId()
    {
        return $this->time_column_spec_id;
    }

    /**
     * column_spec_id of the time column. Only used if the parent dataset's
     * ml_use_column_spec_id is not set. Used to split rows into TRAIN, VALIDATE
     * and TEST sets such that oldest rows go to TRAIN set, newest to TEST, and
     * those in between to VALIDATE.
     * Required type: TIMESTAMP.
     * If both this column and ml_use_column are not set, then ML use of all rows
     * will be assigned by AutoML. NOTE: Updates of this field will instantly
     * affect any other users concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string time_column_spec_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTimeColumnSpecId($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_column_spec_id = $var;

        return $this;
    }

    /**
     * Output only. The number of rows (i.e. examples) in the table.
     *
     * Generated from protobuf field <code>int64 row_count = 3;</code>
     * @return int|string
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * Output only. The number of rows (i.e. examples) in the table.
     *
     * Generated from protobuf field <code>int64 row_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_count = $var;

        return $this;
    }

    /**
     * Output only. The number of valid rows (i.e. without values that don't match
     * DataType-s of their columns).
     *
     * Generated from protobuf field <code>int64 valid_row_count = 4;</code>
     * @return int|string
     */
    public function getValidRowCount()
    {
        return $this->valid_row_count;
    }

    /**
     * Output only. The number of valid rows (i.e. without values that don't match
     * DataType-s of their columns).
     *
     * Generated from protobuf field <code>int64 valid_row_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValidRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->valid_row_count = $var;

        return $this;
    }

    /**
     * Output only. The number of columns of the table. That is, the number of
     * child ColumnSpec-s.
     *
     * Generated from protobuf field <code>int64 column_count = 7;</code>
     * @return int|string
     */
    public function getColumnCount()
    {
        return $this->column_count;
    }

    /**
     * Output only. The number of columns of the table. That is, the number of
     * child ColumnSpec-s.
     *
     * Generated from protobuf field <code>int64 column_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setColumnCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->column_count = $var;

        return $this;
    }

    /**
     * Output only. Input configs via which data currently residing in the table
     * had been imported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.InputConfig input_configs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputConfigs()
    {
        return $this->input_configs;
    }

    /**
     * Output only. Input configs via which data currently residing in the table
     * had been imported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.InputConfig input_configs = 5;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\InputConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1beta1\InputConfig::class);
        $this->input_configs = $arr;

        return $this;
    }

    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

