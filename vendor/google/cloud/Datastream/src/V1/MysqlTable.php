<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MySQL table.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.MysqlTable</code>
 */
class MysqlTable extends \Google\Protobuf\Internal\Message
{
    /**
     * Table name.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     */
    private $table = '';
    /**
     * MySQL columns in the database.
     * When unspecified as part of include/exclude lists, includes/excludes
     * everything.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.MysqlColumn mysql_columns = 2;</code>
     */
    private $mysql_columns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table
     *           Table name.
     *     @type \Google\Cloud\Datastream\V1\MysqlColumn[]|\Google\Protobuf\Internal\RepeatedField $mysql_columns
     *           MySQL columns in the database.
     *           When unspecified as part of include/exclude lists, includes/excludes
     *           everything.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Table name.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Table name.
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
     * MySQL columns in the database.
     * When unspecified as part of include/exclude lists, includes/excludes
     * everything.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.MysqlColumn mysql_columns = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMysqlColumns()
    {
        return $this->mysql_columns;
    }

    /**
     * MySQL columns in the database.
     * When unspecified as part of include/exclude lists, includes/excludes
     * everything.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.MysqlColumn mysql_columns = 2;</code>
     * @param \Google\Cloud\Datastream\V1\MysqlColumn[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMysqlColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastream\V1\MysqlColumn::class);
        $this->mysql_columns = $arr;

        return $this;
    }

}

