<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4\DatabaseInstance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message wraps up the information written by out-of-disk detection job.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.DatabaseInstance.SqlOutOfDiskReport</code>
 */
class SqlOutOfDiskReport extends \Google\Protobuf\Internal\Message
{
    /**
     * This field represents the state generated by the proactive database
     * wellness job for OutOfDisk issues.
     * *  Writers:
     *   *  the proactive database wellness job for OOD.
     * *  Readers:
     *   *  the proactive database wellness job
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1beta4.DatabaseInstance.SqlOutOfDiskReport.SqlOutOfDiskState sql_out_of_disk_state = 1;</code>
     */
    private $sql_out_of_disk_state = null;
    /**
     * The minimum recommended increase size in GigaBytes
     * This field is consumed by the frontend
     * *  Writers:
     *   *  the proactive database wellness job for OOD.
     * *  Readers:
     *
     * Generated from protobuf field <code>optional int32 sql_min_recommended_increase_size_gb = 2;</code>
     */
    private $sql_min_recommended_increase_size_gb = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $sql_out_of_disk_state
     *           This field represents the state generated by the proactive database
     *           wellness job for OutOfDisk issues.
     *           *  Writers:
     *             *  the proactive database wellness job for OOD.
     *           *  Readers:
     *             *  the proactive database wellness job
     *     @type int $sql_min_recommended_increase_size_gb
     *           The minimum recommended increase size in GigaBytes
     *           This field is consumed by the frontend
     *           *  Writers:
     *             *  the proactive database wellness job for OOD.
     *           *  Readers:
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * This field represents the state generated by the proactive database
     * wellness job for OutOfDisk issues.
     * *  Writers:
     *   *  the proactive database wellness job for OOD.
     * *  Readers:
     *   *  the proactive database wellness job
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1beta4.DatabaseInstance.SqlOutOfDiskReport.SqlOutOfDiskState sql_out_of_disk_state = 1;</code>
     * @return int
     */
    public function getSqlOutOfDiskState()
    {
        return isset($this->sql_out_of_disk_state) ? $this->sql_out_of_disk_state : 0;
    }

    public function hasSqlOutOfDiskState()
    {
        return isset($this->sql_out_of_disk_state);
    }

    public function clearSqlOutOfDiskState()
    {
        unset($this->sql_out_of_disk_state);
    }

    /**
     * This field represents the state generated by the proactive database
     * wellness job for OutOfDisk issues.
     * *  Writers:
     *   *  the proactive database wellness job for OOD.
     * *  Readers:
     *   *  the proactive database wellness job
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1beta4.DatabaseInstance.SqlOutOfDiskReport.SqlOutOfDiskState sql_out_of_disk_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSqlOutOfDiskState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1beta4\DatabaseInstance\SqlOutOfDiskReport\SqlOutOfDiskState::class);
        $this->sql_out_of_disk_state = $var;

        return $this;
    }

    /**
     * The minimum recommended increase size in GigaBytes
     * This field is consumed by the frontend
     * *  Writers:
     *   *  the proactive database wellness job for OOD.
     * *  Readers:
     *
     * Generated from protobuf field <code>optional int32 sql_min_recommended_increase_size_gb = 2;</code>
     * @return int
     */
    public function getSqlMinRecommendedIncreaseSizeGb()
    {
        return isset($this->sql_min_recommended_increase_size_gb) ? $this->sql_min_recommended_increase_size_gb : 0;
    }

    public function hasSqlMinRecommendedIncreaseSizeGb()
    {
        return isset($this->sql_min_recommended_increase_size_gb);
    }

    public function clearSqlMinRecommendedIncreaseSizeGb()
    {
        unset($this->sql_min_recommended_increase_size_gb);
    }

    /**
     * The minimum recommended increase size in GigaBytes
     * This field is consumed by the frontend
     * *  Writers:
     *   *  the proactive database wellness job for OOD.
     * *  Readers:
     *
     * Generated from protobuf field <code>optional int32 sql_min_recommended_increase_size_gb = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSqlMinRecommendedIncreaseSizeGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->sql_min_recommended_increase_size_gb = $var;

        return $this;
    }

}


