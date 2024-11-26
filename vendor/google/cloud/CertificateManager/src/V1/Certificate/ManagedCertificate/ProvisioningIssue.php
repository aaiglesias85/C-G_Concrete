<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about issues with provisioning a Managed Certificate.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.ProvisioningIssue</code>
 */
class ProvisioningIssue extends \Google\Protobuf\Internal\Message
{
    /**
     * Reason for provisioning failures.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.ProvisioningIssue.Reason reason = 1;</code>
     */
    private $reason = 0;
    /**
     * Human readable explanation about the issue. Provided to help address
     * the configuration issues.
     * Not guaranteed to be stable. For programmatic access use Reason enum.
     *
     * Generated from protobuf field <code>string details = 2;</code>
     */
    private $details = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $reason
     *           Reason for provisioning failures.
     *     @type string $details
     *           Human readable explanation about the issue. Provided to help address
     *           the configuration issues.
     *           Not guaranteed to be stable. For programmatic access use Reason enum.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Reason for provisioning failures.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.ProvisioningIssue.Reason reason = 1;</code>
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Reason for provisioning failures.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.ProvisioningIssue.Reason reason = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\ProvisioningIssue\Reason::class);
        $this->reason = $var;

        return $this;
    }

    /**
     * Human readable explanation about the issue. Provided to help address
     * the configuration issues.
     * Not guaranteed to be stable. For programmatic access use Reason enum.
     *
     * Generated from protobuf field <code>string details = 2;</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Human readable explanation about the issue. Provided to help address
     * the configuration issues.
     * Not guaranteed to be stable. For programmatic access use Reason enum.
     *
     * Generated from protobuf field <code>string details = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

        return $this;
    }

}


