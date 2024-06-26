<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the database restore.
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.RestoreInfo</code>
 */
class RestoreInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of the restore source.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreSourceType source_type = 1;</code>
     */
    private $source_type = 0;
    protected $source_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $source_type
     *           The type of the restore source.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\BackupInfo $backup_info
     *           Information about the backup used to restore the database. The backup
     *           may no longer exist.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of the restore source.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreSourceType source_type = 1;</code>
     * @return int
     */
    public function getSourceType()
    {
        return $this->source_type;
    }

    /**
     * The type of the restore source.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreSourceType source_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Database\V1\RestoreSourceType::class);
        $this->source_type = $var;

        return $this;
    }

    /**
     * Information about the backup used to restore the database. The backup
     * may no longer exist.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.BackupInfo backup_info = 2;</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\BackupInfo|null
     */
    public function getBackupInfo()
    {
        return $this->readOneof(2);
    }

    public function hasBackupInfo()
    {
        return $this->hasOneof(2);
    }

    /**
     * Information about the backup used to restore the database. The backup
     * may no longer exist.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.BackupInfo backup_info = 2;</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\BackupInfo $var
     * @return $this
     */
    public function setBackupInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\BackupInfo::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceInfo()
    {
        return $this->whichOneof("source_info");
    }

}

