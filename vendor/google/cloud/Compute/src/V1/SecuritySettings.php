<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The authentication and authorization settings for a BackendService.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecuritySettings</code>
 */
class SecuritySettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A URL referring to a networksecurity.ClientTlsPolicy resource that describes how clients should authenticate with this service's backends. clientTlsPolicy only applies to a global BackendService with the loadBalancingScheme set to INTERNAL_SELF_MANAGED. If left blank, communications are not encrypted. Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>optional string client_tls_policy = 462325226;</code>
     */
    private $client_tls_policy = null;
    /**
     * Optional. A list of Subject Alternative Names (SANs) that the client verifies during a mutual TLS handshake with an server/endpoint for this BackendService. When the server presents its X.509 certificate to the client, the client inspects the certificate's subjectAltName field. If the field contains one of the specified values, the communication continues. Otherwise, it fails. This additional check enables the client to verify that the server is authorized to run the requested service. Note that the contents of the server certificate's subjectAltName field are configured by the Public Key Infrastructure which provisions server identities. Only applies to a global BackendService with loadBalancingScheme set to INTERNAL_SELF_MANAGED. Only applies when BackendService has an attached clientTlsPolicy with clientCertificate (mTLS mode). Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>repeated string subject_alt_names = 330029535;</code>
     */
    private $subject_alt_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_tls_policy
     *           Optional. A URL referring to a networksecurity.ClientTlsPolicy resource that describes how clients should authenticate with this service's backends. clientTlsPolicy only applies to a global BackendService with the loadBalancingScheme set to INTERNAL_SELF_MANAGED. If left blank, communications are not encrypted. Note: This field currently has no impact.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $subject_alt_names
     *           Optional. A list of Subject Alternative Names (SANs) that the client verifies during a mutual TLS handshake with an server/endpoint for this BackendService. When the server presents its X.509 certificate to the client, the client inspects the certificate's subjectAltName field. If the field contains one of the specified values, the communication continues. Otherwise, it fails. This additional check enables the client to verify that the server is authorized to run the requested service. Note that the contents of the server certificate's subjectAltName field are configured by the Public Key Infrastructure which provisions server identities. Only applies to a global BackendService with loadBalancingScheme set to INTERNAL_SELF_MANAGED. Only applies when BackendService has an attached clientTlsPolicy with clientCertificate (mTLS mode). Note: This field currently has no impact.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A URL referring to a networksecurity.ClientTlsPolicy resource that describes how clients should authenticate with this service's backends. clientTlsPolicy only applies to a global BackendService with the loadBalancingScheme set to INTERNAL_SELF_MANAGED. If left blank, communications are not encrypted. Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>optional string client_tls_policy = 462325226;</code>
     * @return string
     */
    public function getClientTlsPolicy()
    {
        return isset($this->client_tls_policy) ? $this->client_tls_policy : '';
    }

    public function hasClientTlsPolicy()
    {
        return isset($this->client_tls_policy);
    }

    public function clearClientTlsPolicy()
    {
        unset($this->client_tls_policy);
    }

    /**
     * Optional. A URL referring to a networksecurity.ClientTlsPolicy resource that describes how clients should authenticate with this service's backends. clientTlsPolicy only applies to a global BackendService with the loadBalancingScheme set to INTERNAL_SELF_MANAGED. If left blank, communications are not encrypted. Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>optional string client_tls_policy = 462325226;</code>
     * @param string $var
     * @return $this
     */
    public function setClientTlsPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_tls_policy = $var;

        return $this;
    }

    /**
     * Optional. A list of Subject Alternative Names (SANs) that the client verifies during a mutual TLS handshake with an server/endpoint for this BackendService. When the server presents its X.509 certificate to the client, the client inspects the certificate's subjectAltName field. If the field contains one of the specified values, the communication continues. Otherwise, it fails. This additional check enables the client to verify that the server is authorized to run the requested service. Note that the contents of the server certificate's subjectAltName field are configured by the Public Key Infrastructure which provisions server identities. Only applies to a global BackendService with loadBalancingScheme set to INTERNAL_SELF_MANAGED. Only applies when BackendService has an attached clientTlsPolicy with clientCertificate (mTLS mode). Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>repeated string subject_alt_names = 330029535;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubjectAltNames()
    {
        return $this->subject_alt_names;
    }

    /**
     * Optional. A list of Subject Alternative Names (SANs) that the client verifies during a mutual TLS handshake with an server/endpoint for this BackendService. When the server presents its X.509 certificate to the client, the client inspects the certificate's subjectAltName field. If the field contains one of the specified values, the communication continues. Otherwise, it fails. This additional check enables the client to verify that the server is authorized to run the requested service. Note that the contents of the server certificate's subjectAltName field are configured by the Public Key Infrastructure which provisions server identities. Only applies to a global BackendService with loadBalancingScheme set to INTERNAL_SELF_MANAGED. Only applies when BackendService has an attached clientTlsPolicy with clientCertificate (mTLS mode). Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>repeated string subject_alt_names = 330029535;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubjectAltNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->subject_alt_names = $arr;

        return $this;
    }

}

