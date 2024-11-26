<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore.proto

namespace Google\Cloud\Metastore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DataprocMetastore.GetBackup][google.cloud.metastore.v1beta.DataprocMetastore.GetBackup].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1beta.GetBackupRequest</code>
 */
class GetBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative resource name of the backup to retrieve, in the
     * following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The relative resource name of the backup to retrieve, in the
     *           following form:
     *           `projects/{project_number}/locations/{location_id}/services/{service_id}/backups/{backup_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Beta\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative resource name of the backup to retrieve, in the
     * following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The relative resource name of the backup to retrieve, in the
     * following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

