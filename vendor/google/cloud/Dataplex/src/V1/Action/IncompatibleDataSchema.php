<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Action;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Action details for incompatible schemas detected by discovery.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Action.IncompatibleDataSchema</code>
 */
class IncompatibleDataSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the table containing invalid data.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     */
    private $table = '';
    /**
     * The existing and expected schema of the table. The schema is provided as
     * a JSON formatted structure listing columns and data types.
     *
     * Generated from protobuf field <code>string existing_schema = 2;</code>
     */
    private $existing_schema = '';
    /**
     * The new and incompatible schema within the table. The schema is provided
     * as a JSON formatted structured listing columns and data types.
     *
     * Generated from protobuf field <code>string new_schema = 3;</code>
     */
    private $new_schema = '';
    /**
     * The list of data locations sampled and used for format/schema
     * inference.
     *
     * Generated from protobuf field <code>repeated string sampled_data_locations = 4;</code>
     */
    private $sampled_data_locations;
    /**
     * Whether the action relates to a schema that is incompatible or modified.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Action.IncompatibleDataSchema.SchemaChange schema_change = 5;</code>
     */
    private $schema_change = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table
     *           The name of the table containing invalid data.
     *     @type string $existing_schema
     *           The existing and expected schema of the table. The schema is provided as
     *           a JSON formatted structure listing columns and data types.
     *     @type string $new_schema
     *           The new and incompatible schema within the table. The schema is provided
     *           as a JSON formatted structured listing columns and data types.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $sampled_data_locations
     *           The list of data locations sampled and used for format/schema
     *           inference.
     *     @type int $schema_change
     *           Whether the action relates to a schema that is incompatible or modified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the table containing invalid data.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * The name of the table containing invalid data.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

    /**
     * The existing and expected schema of the table. The schema is provided as
     * a JSON formatted structure listing columns and data types.
     *
     * Generated from protobuf field <code>string existing_schema = 2;</code>
     * @return string
     */
    public function getExistingSchema()
    {
        return $this->existing_schema;
    }

    /**
     * The existing and expected schema of the table. The schema is provided as
     * a JSON formatted structure listing columns and data types.
     *
     * Generated from protobuf field <code>string existing_schema = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExistingSchema($var)
    {
        GPBUtil::checkString($var, True);
        $this->existing_schema = $var;

        return $this;
    }

    /**
     * The new and incompatible schema within the table. The schema is provided
     * as a JSON formatted structured listing columns and data types.
     *
     * Generated from protobuf field <code>string new_schema = 3;</code>
     * @return string
     */
    public function getNewSchema()
    {
        return $this->new_schema;
    }

    /**
     * The new and incompatible schema within the table. The schema is provided
     * as a JSON formatted structured listing columns and data types.
     *
     * Generated from protobuf field <code>string new_schema = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNewSchema($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_schema = $var;

        return $this;
    }

    /**
     * The list of data locations sampled and used for format/schema
     * inference.
     *
     * Generated from protobuf field <code>repeated string sampled_data_locations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSampledDataLocations()
    {
        return $this->sampled_data_locations;
    }

    /**
     * The list of data locations sampled and used for format/schema
     * inference.
     *
     * Generated from protobuf field <code>repeated string sampled_data_locations = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSampledDataLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->sampled_data_locations = $arr;

        return $this;
    }

    /**
     * Whether the action relates to a schema that is incompatible or modified.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Action.IncompatibleDataSchema.SchemaChange schema_change = 5;</code>
     * @return int
     */
    public function getSchemaChange()
    {
        return $this->schema_change;
    }

    /**
     * Whether the action relates to a schema that is incompatible or modified.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Action.IncompatibleDataSchema.SchemaChange schema_change = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSchemaChange($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Action\IncompatibleDataSchema\SchemaChange::class);
        $this->schema_change = $var;

        return $this;
    }

}


