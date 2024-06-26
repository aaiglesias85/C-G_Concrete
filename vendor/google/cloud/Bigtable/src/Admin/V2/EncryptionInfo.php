<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encryption information for a given resource.
 * If this resource is protected with customer managed encryption, the in-use
 * Cloud Key Management Service (Cloud KMS) key version is specified along with
 * its status.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.EncryptionInfo</code>
 */
class EncryptionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The type of encryption used to protect this resource.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.EncryptionInfo.EncryptionType encryption_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $encryption_type = 0;
    /**
     * Output only. The status of encrypt/decrypt calls on underlying data for this resource.
     * Regardless of status, the existing data is always encrypted at rest.
     *
     * Generated from protobuf field <code>.google.rpc.Status encryption_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $encryption_status = null;
    /**
     * Output only. The version of the Cloud KMS key specified in the parent cluster that is
     * in use for the data underlying this table.
     *
     * Generated from protobuf field <code>string kms_key_version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $kms_key_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $encryption_type
     *           Output only. The type of encryption used to protect this resource.
     *     @type \Google\Rpc\Status $encryption_status
     *           Output only. The status of encrypt/decrypt calls on underlying data for this resource.
     *           Regardless of status, the existing data is always encrypted at rest.
     *     @type string $kms_key_version
     *           Output only. The version of the Cloud KMS key specified in the parent cluster that is
     *           in use for the data underlying this table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The type of encryption used to protect this resource.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.EncryptionInfo.EncryptionType encryption_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEncryptionType()
    {
        return $this->encryption_type;
    }

    /**
     * Output only. The type of encryption used to protect this resource.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.EncryptionInfo.EncryptionType encryption_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEncryptionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\EncryptionInfo\EncryptionType::class);
        $this->encryption_type = $var;

        return $this;
    }

    /**
     * Output only. The status of encrypt/decrypt calls on underlying data for this resource.
     * Regardless of status, the existing data is always encrypted at rest.
     *
     * Generated from protobuf field <code>.google.rpc.Status encryption_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getEncryptionStatus()
    {
        return $this->encryption_status;
    }

    public function hasEncryptionStatus()
    {
        return isset($this->encryption_status);
    }

    public function clearEncryptionStatus()
    {
        unset($this->encryption_status);
    }

    /**
     * Output only. The status of encrypt/decrypt calls on underlying data for this resource.
     * Regardless of status, the existing data is always encrypted at rest.
     *
     * Generated from protobuf field <code>.google.rpc.Status encryption_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setEncryptionStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->encryption_status = $var;

        return $this;
    }

    /**
     * Output only. The version of the Cloud KMS key specified in the parent cluster that is
     * in use for the data underlying this table.
     *
     * Generated from protobuf field <code>string kms_key_version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyVersion()
    {
        return $this->kms_key_version;
    }

    /**
     * Output only. The version of the Cloud KMS key specified in the parent cluster that is
     * in use for the data underlying this table.
     *
     * Generated from protobuf field <code>string kms_key_version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_version = $var;

        return $this;
    }

}

