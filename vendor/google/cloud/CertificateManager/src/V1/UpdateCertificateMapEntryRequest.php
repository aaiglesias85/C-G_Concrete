<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `UpdateCertificateMapEntry` method.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.UpdateCertificateMapEntryRequest</code>
 */
class UpdateCertificateMapEntryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A definition of the certificate map entry to create map entry.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateMapEntry certificate_map_entry = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $certificate_map_entry = null;
    /**
     * Required. The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\CertificateManager\V1\CertificateMapEntry $certificate_map_entry
     *           Required. A definition of the certificate map entry to create map entry.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The update mask applies to the resource. For the `FieldMask` definition,
     *           see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A definition of the certificate map entry to create map entry.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateMapEntry certificate_map_entry = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CertificateManager\V1\CertificateMapEntry|null
     */
    public function getCertificateMapEntry()
    {
        return $this->certificate_map_entry;
    }

    public function hasCertificateMapEntry()
    {
        return isset($this->certificate_map_entry);
    }

    public function clearCertificateMapEntry()
    {
        unset($this->certificate_map_entry);
    }

    /**
     * Required. A definition of the certificate map entry to create map entry.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateMapEntry certificate_map_entry = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CertificateManager\V1\CertificateMapEntry $var
     * @return $this
     */
    public function setCertificateMapEntry($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CertificateManager\V1\CertificateMapEntry::class);
        $this->certificate_map_entry = $var;

        return $this;
    }

    /**
     * Required. The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

