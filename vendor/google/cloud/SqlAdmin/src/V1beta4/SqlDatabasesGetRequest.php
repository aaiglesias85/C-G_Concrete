<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlDatabasesGetRequest</code>
 */
class SqlDatabasesGetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the database in the instance.
     *
     * Generated from protobuf field <code>string database = 1;</code>
     */
    private $database = '';
    /**
     * Database instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 2;</code>
     */
    private $instance = '';
    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 3;</code>
     */
    private $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Name of the database in the instance.
     *     @type string $instance
     *           Database instance ID. This does not include the project ID.
     *     @type string $project
     *           Project ID of the project that contains the instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSql::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the database in the instance.
     *
     * Generated from protobuf field <code>string database = 1;</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Name of the database in the instance.
     *
     * Generated from protobuf field <code>string database = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * Database instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 2;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Database instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 3;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

}

