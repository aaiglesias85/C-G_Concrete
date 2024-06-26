<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Sql Server database on the Cloud SQL instance.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlServerDatabaseDetails</code>
 */
class SqlServerDatabaseDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The version of SQL Server with which the database is to be made compatible
     *
     * Generated from protobuf field <code>int32 compatibility_level = 1;</code>
     */
    private $compatibility_level = 0;
    /**
     * The recovery model of a SQL Server database
     *
     * Generated from protobuf field <code>string recovery_model = 2;</code>
     */
    private $recovery_model = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $compatibility_level
     *           The version of SQL Server with which the database is to be made compatible
     *     @type string $recovery_model
     *           The recovery model of a SQL Server database
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The version of SQL Server with which the database is to be made compatible
     *
     * Generated from protobuf field <code>int32 compatibility_level = 1;</code>
     * @return int
     */
    public function getCompatibilityLevel()
    {
        return $this->compatibility_level;
    }

    /**
     * The version of SQL Server with which the database is to be made compatible
     *
     * Generated from protobuf field <code>int32 compatibility_level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCompatibilityLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->compatibility_level = $var;

        return $this;
    }

    /**
     * The recovery model of a SQL Server database
     *
     * Generated from protobuf field <code>string recovery_model = 2;</code>
     * @return string
     */
    public function getRecoveryModel()
    {
        return $this->recovery_model;
    }

    /**
     * The recovery model of a SQL Server database
     *
     * Generated from protobuf field <code>string recovery_model = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRecoveryModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->recovery_model = $var;

        return $this;
    }

}

