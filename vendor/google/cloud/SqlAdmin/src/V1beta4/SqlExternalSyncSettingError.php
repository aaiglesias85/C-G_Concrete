<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * External primary instance migration setting error/warning.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlExternalSyncSettingError</code>
 */
class SqlExternalSyncSettingError extends \Google\Protobuf\Internal\Message
{
    /**
     * Can be `sql#externalSyncSettingError` or
     * `sql#externalSyncSettingWarning`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * Identifies the specific error that occurred.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SqlExternalSyncSettingError.SqlExternalSyncSettingErrorType type = 2;</code>
     */
    private $type = 0;
    /**
     * Additional information about the error encountered.
     *
     * Generated from protobuf field <code>string detail = 3;</code>
     */
    private $detail = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           Can be `sql#externalSyncSettingError` or
     *           `sql#externalSyncSettingWarning`.
     *     @type int $type
     *           Identifies the specific error that occurred.
     *     @type string $detail
     *           Additional information about the error encountered.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Can be `sql#externalSyncSettingError` or
     * `sql#externalSyncSettingWarning`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Can be `sql#externalSyncSettingError` or
     * `sql#externalSyncSettingWarning`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Identifies the specific error that occurred.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SqlExternalSyncSettingError.SqlExternalSyncSettingErrorType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Identifies the specific error that occurred.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SqlExternalSyncSettingError.SqlExternalSyncSettingErrorType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1beta4\SqlExternalSyncSettingError\SqlExternalSyncSettingErrorType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Additional information about the error encountered.
     *
     * Generated from protobuf field <code>string detail = 3;</code>
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Additional information about the error encountered.
     *
     * Generated from protobuf field <code>string detail = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->detail = $var;

        return $this;
    }

}

